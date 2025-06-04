document.querySelector('.load-more').addEventListener('click', function() {
    const hiddenCards = document.querySelectorAll('.card.hidden');
    const cardsToShow = Array.from(hiddenCards).slice(0, 2);

    if (hiddenCards.length <= 2) {
        this.style.display = 'none';
    }

    cardsToShow.forEach((card, index) => {
        setTimeout(() => {
            card.classList.remove('hidden');
            card.classList.add('show');
            const lastCard = card;

            if (index === cardsToShow.length - 1) {
                const cardRect = lastCard.getBoundingClientRect();
                const isCardBelowViewport = cardRect.bottom > window.innerHeight;

                if (isCardBelowViewport) {
                    window.scrollTo({
                        top: window.scrollY + (cardRect.bottom - window.innerHeight) + 66,
                        behavior: 'smooth'
                    });
                }
            }
        }, index * 200);
    });
});
