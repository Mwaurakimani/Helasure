export const generateBackgroundSquares = () => {
        let bgContainer = document.querySelector("#background-container");

        if (!bgContainer) {
            bgContainer = document.createElement("div");
            bgContainer.id = "background-container";
            document.body.prepend(bgContainer); // Ensures it stays behind everything
        }

        const numSquares = 30; // Adjust the number of squares
        for (let i = 0; i < numSquares; i++) {
            const square = document.createElement("div");
            square.classList.add("background-square");

            // Random positioning & rotation
            const size = Math.floor(Math.random() * 80) + 20; // 20px to 100px
            const posX = Math.random() * window.innerWidth;
            const posY = Math.random() * window.innerHeight;
            const rotation = Math.random() * 360;
            const delay = Math.random() * 3; // Random delay for animation variety

            // Random colors (blue & orange shades)
            const colors = [
                "rgba(30, 144, 255, 0.1)", // Light Blue
                "rgba(255, 165, 0, 0.1)",  // Light Orange
            ];
            const colorIndex = Math.floor(Math.random() * colors.length);

            // Apply styles
            square.style.width = `${size}px`;
            square.style.height = `${size}px`;
            square.style.left = `${posX}px`;
            square.style.top = `${posY}px`;
            square.style.transform = `rotate(${rotation}deg)`;
            square.style.backgroundColor = colors[colorIndex];
            square.style.animationDelay = `${delay}s`;

            bgContainer.appendChild(square);
        }
}

