(function() {
    let field = document.querySelector('.items');
    let li = Array.from(field.children);
    let indicator = document.querySelector('.indicator').children;
    let select = document.getElementById('select');

    // Function to filter products by category
    function filterProducts(category) {
        for (let i of li) {
            i.style.transform = "scale(0)";
            setTimeout(() => {
                i.style.display = "none";
            }, 500);

            if (category === "all" || i.getAttribute('data-category') === category) {
                i.style.transform = "scale(1)";
                setTimeout(() => {
                    i.style.display = "block";
                }, 500);
            }
        }
    }

    // Function to parse Indian Rupees and sort products by price in ascending order
    function sortProductsLowToHigh() {
        li.sort((a, b) => {
            const ax = parseInt(a.getAttribute('data-price').replace("₹", "").trim().replace(/,/g, ''));
            const bx = parseInt(b.getAttribute('data-price').replace("₹", "").trim().replace(/,/g, ''));
            return ax - bx;
        });
        li.forEach(item => field.appendChild(item));
    }

    // Function to parse Indian Rupees and sort products by price in descending order
    function sortProductsHighToLow() {
        li.sort((a, b) => {
            const ax = parseInt(a.getAttribute('data-price').replace("₹", "").trim().replace(/,/g, ''));
            const bx = parseInt(b.getAttribute('data-price').replace("₹", "").trim().replace(/,/g, ''));
            return bx - ax;
        });
        li.forEach(item => field.appendChild(item));
    }

    // Event handling for category filter
    for (let i = 0; i < indicator.length; i++) {
        indicator[i].addEventListener('click', function() {
            for (let x = 0; x < indicator.length; x++) {
                indicator[x].classList.remove('active');
            }
            this.classList.add('active');
            const selectedCategory = this.getAttribute('data-filter');
            filterProducts(selectedCategory);
        });
    }

    // Event handling for sorting options
    select.addEventListener('change', function() {
        if (this.value === 'Default') {
            // Do nothing (no sorting)
        } else if (this.value === 'LowToHigh') {
            sortProductsLowToHigh(); // Sort low to high by price
        } else if (this.value === 'HighToLow') {
            sortProductsHighToLow(); // Sort high to low by price
        }
    });

    // Initially filter by "all" to display all products
    filterProducts("all");
})();
