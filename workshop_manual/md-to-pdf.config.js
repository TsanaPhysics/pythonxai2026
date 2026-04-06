module.exports = {
    pdf_options: {
        format: 'A4',
        displayHeaderFooter: true,
        headerTemplate: `
            <div style="font-family: 'Sarabun', sans-serif; font-size: 9px; width: 100%; margin: 0 1.0in 0 1.5in; display: flex; justify-content: space-between; border-bottom: 0.5px solid #ddd; padding-bottom: 2px;">
                <span style="color: #666;">Python xAI < AI-AGENT Co-Creator ></span>
                <span style="color: #333; font-weight: bold;"><span class="pageNumber"></span></span>
            </div>`,
        footerTemplate: `
            <div style="font-family: 'Sarabun', sans-serif; font-size: 9px; width: 100%; margin: 0 1.0in 0 1.5in; display: flex; justify-content: center; border-top: 0.5px solid #ddd; padding-top: 2px;">
                <span style="color: #888;">หลักสูตรเทคโนโลยีดิจิทัลปัญญาประดิษฐ์เพื่อการเกษตรและสิ่งแวดล้อม 2570</span>
            </div>`,
        margin: {
            top: '80px',
            bottom: '80px',
            left: '1.5in',
            right: '1in'
        }
    }
};
