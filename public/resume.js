function downloadAsPDF(){
    let element = document.getElementById('container');
    
    var opt = {
        margin:        1,
        filename:     'Resume.pdf',
        html2canvas:  {scale: 3},
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };
      
    html2pdf().set(opt).from(element).save();
};