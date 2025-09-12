document.getElementById('imgGenerate').addEventListener('click', function() {
    html2canvas(document.getElementById('grid')).then(function(canvas) {
        const link = document.createElement('a');
        link.download = 'cikti.png';            // Dosya adı
        link.href = canvas.toDataURL('image/png');
        link.click();
    });
});