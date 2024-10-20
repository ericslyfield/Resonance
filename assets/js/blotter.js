document.addEventListener("DOMContentLoaded", function() {
    let size = Math.min(Math.min(window.innerWidth * 0.25, 50), 300);
    let padding = Math.min(Math.max(window.innerWidth * 0.10, 25), 150);

    // Define text style
    const text = new Blotter.Text("Eric Slyfield", {
        family: "'Gothic A1', sans-serif",
        size: size,
        weight: 900,
        paddingTop: padding,
        paddingLeft: 0,
        paddingRight: 0,
        paddingBottom: padding,
        fill: '#ffffffA3'
    });

    // Initialize Blotter.js
    var material = new Blotter.ChannelSplitMaterial();

    // Initial Material Options for a plain text effect
    material.uniforms.uOffset.value = 0.0; // Start with no offset
    material.uniforms.uRotation.value = 0.0; // No rotation initially
    material.uniforms.uApplyBlur.value = 1.0;
    material.uniforms.uAnimateNoise.value = 0.0;

    // Function to update animation values
    function updateAnimation() {
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

    let lastScrollTop = 0;

    function updateEffect(scrollDelta) {
        // Make the effect more pronounced based on the scroll delta
        material.uniforms.uRotation.value += scrollDelta * 0.175; // Adjust rotation
        material.uniforms.uOffset.value += scrollDelta * 0.001; // Adjust offset
    }

    function onScroll(event) {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        let scrollDelta = scrollTop - lastScrollTop;
        updateEffect(scrollDelta);
        lastScrollTop = scrollTop;
    }

    window.addEventListener("scroll", onScroll);

    // Get the canvas element
    const canvas = document.getElementById('blotter-container');
    const ctx = canvas.getContext('2d');

    // Set canvas dimensions
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Create a gradient for the inside edge effect
    const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
    gradient.addColorStop(0, '#000000'); // Start with white
    gradient.addColorStop(1, '#ffffff'); // End with black or desired color

    // Use the gradient to fill a rectangle covering the canvas
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
});
