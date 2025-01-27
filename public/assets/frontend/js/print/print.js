const printButton = document.getElementById("print-button");

const printPAge = () => {

    const printFrame = document.createElement('iframe');
    printFrame.style.display = 'none';
    printFrame.src='certificate.blade.php';
    dicument.body.appendChild(printFrame);
    printFrame.contentWindow.focus();
    printFrame.contentWindow.print();
};
printButton.addEventListener("click", () => {
    printPAge();
});
