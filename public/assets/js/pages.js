
const ArticleModel = document.querySelector('#ArticleModel');
const AddArticleButt = document.querySelector('#addatrticle');
const CloseArticle = document.querySelector('#closearticlemodel');



function showArticleModal(){
    AddArticleButt.addEventListener('click',()=>{
        ArticleModel.classList.toggle("hidden");
    })
}

function closeArt(){
    CloseArticle.addEventListener('click',()=>{
        ArticleModel.classList.toggle("hidden");

    })
}

showArticleModal()
closeArt()






