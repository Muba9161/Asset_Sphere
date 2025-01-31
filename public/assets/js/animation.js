function scrambleText(element) {
    const originalText = "CLONE PASTE LAUNCH";
    const scrambledText = originalText.split('').sort(() => Math.random() - 0.5).join('');
    const textElement = document.querySelector(element);

    // Scramble the text
    textElement.innerHTML = scrambledText;

    // Return to original text after a delay
    setTimeout(() => {
        textElement.innerHTML = originalText;
    }, 2000); // Change back after 2 seconds
}

// Trigger the scramble function on page load
window.onload = function() {
    scrambleText('h2'); // Targeting the <h2> element
};
