document.addEventListener("DOMContentLoaded", function() {

let size = Math.min(Math.min(window.innerWidth * 0.13, 50), 120);
let padding = Math.min(Math.max(window.innerWidth * 0.08, 50), 150);

// Define text style
const text = new Blotter.Text("Resonate", {
  family: "'Gothic A1', sans-serif",
  size: size,
  weight: 700,
  paddingTop: 0,
  paddingLeft: 50,
  paddingRight: 50,
  paddingBottom: 0,
  fill: '#000'
});

// Initialize Blotter.js
var material = new Blotter.ChannelSplitMaterial();

// Material Options

material.uniforms.uOffset.value = 0.017;
material.uniforms.uRotation.value = 90.0;
material.uniforms.uApplyBlur.value = 1.0;
material.uniforms.uAnimateNoise.value = 0.0;

// Function to update animation values
function updateAnimation() {
  // Update animation values here
  material.uniforms.uOffset.value += 0.0001; // Example: Increase uOffset value over time
  material.uniforms.uRotation.value += 0.145; // Example: Increase uRotation value over time
  // You can update other animation values similarly
  
  // Request next animation frame
  requestAnimationFrame(updateAnimation);
}

// Start animation loop
updateAnimation();

var blotter = new Blotter(material, {
  texts: text,
});
blotter.needsUpdate = true;

// Apply to element
let scope = blotter.forText(text);
let container = document.getElementById('blotter-container');
scope.appendTo(container);

window.addEventListener("resize", () => {
  let newSize = Math.min(Math.max(window.innerWidth * 0.13, 50), 120);
  let newPadding = Math.min(Math.max(window.innerWidth * 0.08, 50), 150);

  if (newSize !== size || newPadding !== padding) {
      size = newSize;
      padding = newPadding;
      container.value.innerHTML = "";
      createBlotter(size, container.value, padding);
  }
})

document.addEventListener("pointermove", moveIt);
document.addEventListener("touchstart", moveIt);

function moveIt(event) {

  // Check if it's a touch event, get the first touch position
  let clientX, clientY;

  if (event.type === "touchstart" && event.touches.length > 0) {
    clientX = event.touches[0].clientY;
    clientY = event.touches[0].clientY;
  } else if (event.type === "pointermove") {
    clientX = event.clientY;
    clientY = event.clientY;
  } else {
    return; // Exit if event type is neither touchstart nor pointermove
  }

    material.uniforms.uRotation.value = (event.clientY * .2);
    material.uniforms.uOffset.value = (event.clientY * .0003);

}

// Get the canvas element
const canvas = document.getElementById('blotter-container');
const ctx = canvas.getContext('2d');

// Set canvas dimensions
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Create a gradient for the inside edge effect
const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
gradient.addColorStop(0, '#ffffff'); // Start with white
gradient.addColorStop(1, '#000000'); // End with black or desired color

// Use the gradient to fill a rectangle covering the canvas
ctx.fillStyle = gradient;
ctx.fillRect(0, 0, canvas.width, canvas.height);

});