document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        alert('Your message has been saved. Thank you for contacting us!');
    }
});
