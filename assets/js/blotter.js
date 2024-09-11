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
            container.innerHTML = "";
            createBlotter(size, container, padding);
        }
    });

    let lastScrollTop = 0;
    let isTouching = false;
    let touchStartY = 0;

    function updateEffect(value) {
        material.uniforms.uRotation.value = value * 0.2;
        material.uniforms.uOffset.value = value * 0.0003;
    }

    function onScroll(event) {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        updateEffect(scrollTop - lastScrollTop);
        lastScrollTop = scrollTop;
    }

    function onTouchStart(event) {
        if (event.touches.length > 0) {
            touchStartY = event.touches[0].clientY;
            isTouching = true;
        }
    }

    function onTouchMove(event) {
        if (isTouching && event.touches.length > 0) {
            let touchY = event.touches[0].clientY;
            let deltaY = touchY - touchStartY;
            updateEffect(deltaY);
            touchStartY = touchY;
        }
    }

    function onTouchEnd(event) {
        isTouching = false;
    }

    window.addEventListener("scroll", onScroll);
    document.addEventListener("touchstart", onTouchStart);
    document.addEventListener("touchmove", onTouchMove);
    document.addEventListener("touchend", onTouchEnd);

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
