README - Envelope PDF Generator
Table of Contents
1.	Features
2.	How to Use
3.	Technical Details
4.	Customization
5.	License
Features
•	Logo Upload: Add your organization's logo to all generated envelopes
•	Excel/CSV Import: Bulk import guest data from spreadsheet files
•	Manual Room Management: Add, edit, and remove rooms and guests
•	PDF Generation: Create printable envelopes with proper formatting
•	Responsive Design: Works on desktop and mobile devices
•	Modern UI: Clean interface with animations and intuitive controls
How to Use
1.	Upload Your Logo (optional):
o	Click or drag an image file (PNG/JPG) to the logo upload area
2.	Add Guest Data:
o	Option 1: Import from Excel/CSV (drag & drop or click to upload)
o	Option 2: Manually add rooms and guest names using the interface
3.	Generate PDF:
o	Click "Generate & Download PDF" to create and save your envelopes
o	Each envelope will show the room number and guest names
Technical Details
•	Frontend: Pure HTML/CSS/JavaScript with Tailwind CSS
•	PDF Generation: jsPDF library
•	Excel Parsing: SheetJS (xlsx)
•	File Handling: FileSaver.js for downloads
•	No backend required: Works entirely in the browser
Customization
You can easily customize:
•	Colors: Modify the CSS variables in the <style> section
•	Fonts: Change the Google Fonts import
•	Layout: Adjust the PDF dimensions in the JavaScript code
•	Logo positioning: Modify the PDF generation coordinates
License
This project is open-source and free to use. Attribution to the original creator is appreciated.
