document.addEventListener('DOMContentLoaded', function (){
    const showAuthBtn = document.querySelector('js-show-auth-model');
    const authModal = document.getElementById('auth-modal');

    const showAuthModal = () => {
        authModal.style.display = '';
    }

    showAuthBtn.addEventListener('click', showAuthModal);

    const authTabBtns = document.querySelectorAll('.js-auth-tab-btn');
    const authTabContents = document.querySelectorAll('.auth-modal__content')

    authTabBtns.forEach(function(btn ,){
        btn.addEventListener('click', function(){
            const targetTabContent = document.querySelector('.auth-modal__content'[data-type=$(this.dataset.type)]);

            authTabContents.forEach(function(content){
                content.style.display='none';
            });

            targetTabContent.style.display = 'block';

        
        
        
        });
    });
})