document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('click', () => {
        const filePath = item.getAttribute('data-file');
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');
        const downloadButton = document.getElementById('download');
        
        modal.style.display = 'flex';
        modalContent.src = filePath;
        downloadButton.href = filePath;
    });
});

document.getElementById('close').addEventListener('click', () => {
    document.getElementById('modal').style.display = 'none';
});

document.getElementById('print').addEventListener('click', () => {
    const modalContent = document.getElementById('modal-content');
    modalContent.contentWindow.print();
});
