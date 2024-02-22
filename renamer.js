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
            const filePath = path.join(directoryPath, file);

            // Check if the file is the script itself
            if (file === path.basename(__filename)) {
                return; // Skip the script itself
            }

            // Check if the file is a directory
            fs.stat(filePath, (err, stats) => {
                if (err) {
                    console.error(`Error checking file stats for ${filePath}:`, err);
                    return;
                }

                if (stats.isFile()) {
                    const fileExtension = path.extname(file);
                    const newFileName = `${baseName}${fileNumber}${fileExtension}`;
                    const newFilePath = path.join(directoryPath, newFileName);

                    // Rename the file
                    fs.rename(filePath, newFilePath, err => {
                        if (err) {
                            console.error(`Error renaming file ${filePath}:`, err);
                        } else {
                            console.log(`Renamed ${filePath} to ${newFilePath}`);
                        }
                    });

                    fileNumber++;
                }
            });
        });
    });
}

// Example usage:
const directoryPath = './';
const baseName = 'stage';

renameFiles(directoryPath, baseName);
