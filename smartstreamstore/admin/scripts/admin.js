// Example: Dynamic product count animation
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-card p");
    counters.forEach(counter => {
        counter.innerText = "0";

        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const current = +counter.innerText;
            const increment = target / 100;

            if (current < target) {
                counter.innerText = `${Math.ceil(current + increment)}`;
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target;
            }
        };

        if (counter.getAttribute("data-target")) {
            updateCounter();
        }
    });
});