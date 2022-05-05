(function(){
    console.log("Boite carrousel");
    let boite__carrousel = document.querySelector(".boite__carrousel")
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture")
    let galerie__img = document.querySelectorAll(".galerie img");
    console.log(galerie__img.length);

    boite__carrousel__fermeture.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('ouvrir');
    });

    let index = 0;

    let elmImg = document.createElement('img');
    boite__carrousel.append(elmImg);

    for (const img of galerie__img) {
        console.log(img.tagName)
        let bouton = document.createElement('button');
        bouton.dataset.index = index++;
        boite__carrousel__navigation.append(bouton);

        bouton.addEventListener('mousedown', function(){
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })

        img.addEventListener('mousedown', function(){
            console.log(this.getAttribute('src'));
            boite__carrousel.classList.add('ouvrir');
            console.log(boite__carrousel.classList);
            elmImg.setAttribute('src', this.getAttribute('src'));
   
   /*
      parentNode
      children()
      innerHTML
   */
   
   
        })
    }
   })() 