#!/usr/bin/env node
const fs = require('fs');
const fileNames = ['jquery-ui.js', 'jquery-ui.min.js'];
fileNames.forEach((fileName) => {
    const source = 'node_modules/jquery-ui-dist/' + fileName;
    const target = 'Resources/Public/JavaScript/' + fileName;
    fs.copyFile(source, target, (err) => {
        if (err) {
            throw err;
        }
        console.log('copied asset to ' + target);
    });
});
