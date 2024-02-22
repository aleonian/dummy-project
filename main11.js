const fs = require('fs');
const path = require('path');

function renameFiles(directoryPath, baseName) {
    fs.readdir(directoryPath, (err, files) => {
        if (err) {
            console.error('Error reading directory:', err);
            return;
        }

        let fileNumber = 1;
        files.forEach(file => {
            const oldFilePath = path.join(directoryPath, file);
            const fileExtension = path.extname(file);
            const newFileName = `${baseName}${fileNumber}${fileExtension}`;
            const newFilePath = path.join(directoryPath, newFileName);

            // Rename the file
            fs.rename(oldFilePath, newFilePath, err => {
                if (err) {
                    console.error(`Error renaming file ${oldFilePath}:`, err);
                } else {
                    console.log(`Renamed ${oldFilePath} to ${newFilePath}`);
                }
            });

            fileNumber++;
        });
    });
}

// Example usage:
const directoryPath = './';
const baseName = 'main';

renameFiles(directoryPath, baseName);
