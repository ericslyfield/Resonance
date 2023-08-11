document.addEventListener("DOMContentLoaded", () => {

// Select all elements on the page
const elements = document.querySelectorAll('*');

// Loop through each element
elements.forEach(element => {
  // Check if the element is an H1 tag
  if (element.tagName === 'H1') {
    // Add the 'my-class' class to the element
    element.classList.add('hero');
  }
});

});