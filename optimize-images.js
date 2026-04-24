import sharp from 'sharp';
import fs from 'fs';
import path from 'path';

const dirs = [
    'public/assets',
    'storage/app/public/activities'
];

async function optimizeImages() {
    for (const dir of dirs) {
        if (!fs.existsSync(dir)) continue;

        const files = fs.readdirSync(dir);
        for (const file of files) {
            const filePath = path.join(dir, file);
            const ext = path.extname(file).toLowerCase();

            if (['.jpg', '.jpeg', '.png'].includes(ext)) {
                const outputPath = path.join(dir, path.basename(file, path.extname(file)) + '.webp');

                console.log(`Optimizing: ${filePath} -> ${outputPath}`);

                let pipeline = sharp(filePath);

                // Specific resize for the massive frontPage.png
                if (file === 'frontPage.png') {
                    console.log('Resizing frontPage.png to max 2560px width...');
                    pipeline = pipeline.resize({ width: 2560, withoutEnlargement: true });
                }

                try {
                    await pipeline
                        .webp({ quality: 80 })
                        .toFile(outputPath);

                    const oldSize = fs.statSync(filePath).size;
                    const newSize = fs.statSync(outputPath).size;
                    const reduction = ((oldSize - newSize) / oldSize * 100).toFixed(2);

                    console.log(`Success! Size reduced by ${reduction}% (${(oldSize/1024/1024).toFixed(2)}MB -> ${(newSize/1024/1024).toFixed(2)}MB)`);
                } catch (err) {
                    console.error(`Error optimizing ${file}:`, err);
                }
            }
        }
    }
}

optimizeImages().then(() => console.log('Optimization complete!'));
