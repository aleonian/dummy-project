// Importing the required modules
const fs = require('fs');
const moment = require('moment');

// Get the current date
const currentDate = new Date();

// Define the date formats using moment
const dateFormat1 = moment(currentDate).toString();
const dateFormat2 = moment(currentDate).format('YYYY-MM-DD HH:mm:ss');
const dateFormat3 = moment(currentDate).format('dddd, MMMM Do YYYY, h:mm:ss a');

// Create the content to write to the file
const fileContent = `
Date Format 1: ${dateFormat1}
Date Format 2: ${dateFormat2}
Date Format 3: ${dateFormat3}
`;

// Define the file path
const filePath = 'current_date.txt';

// Write the content to the file
fs.writeFileSync(filePath, fileContent);

console.log(`File '${filePath}' has been created with the current date in three different formats.`);

console.log(fileContent);
