$(document).ready(function () {
    const nav = $('body > section:nth-child(1) > nav')

    const navHeight = nav.height()
    $(window).scroll(function () {
        try {
            document.querySelector('.navbar').classList.toggle('sticky', window.scrollY > 0)
            document.querySelector('.intro-page_img-container').classList.toggle('w-100', window.scrollY > 0)
        } catch (error) {

        }

        const scroll = $(window).scrollTop()

    })



    $('body > section:nth-child(1) > nav > div > i').click(function () {

        changeImgLogo()

        nav.toggleClass("bg-light-opaque")
        nav.toggleClass("size-screen")
        nav.toggleClass('bg-black')
        nav.toggleClass("navbar-light")
        nav.toggleClass("text-white")

    })
    try {
        $('.carousel').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 6000
        });
    } catch (error) {
        console.log(error)
    }

})

let prevUrl

function changeImgLogo() {
    let url = 'img/Logo - White.svg'
    const img = document.querySelector('.navbar-brand img')

    console.log(img['src'].includes('White'));
    if (!img['src'].includes('White')) {
        prevUrl = img['src']
        console.log(prevUrl);
        img['src'] = url
    } else {
        img['src'] = prevUrl
        prevUrl = url
    }

}

// muting unnecessary errors
try {
    AOS.init();
    main()
} catch (error) {

}

function main() {
    const med = window.matchMedia("(max-width: 767px)")
    if (med.matches) {
        // smaller screen
        team()

    } else {
        // larger screen
        services()

    }
}



// removing collapse funcs from services
function services() {
    const h5s = document.querySelectorAll('#services div.container div.row div.col-md-5>div:last-child h5')
    const ps = document.querySelectorAll('#services div.container div.row div.col-md-5>div:last-child p')

    ps.forEach(function (p) {
        p.classList.remove('collapse')
    })

    h5s.forEach(function (h5) {
        h5.removeAttribute('data-target')
    })
}

// adding crousel to team members
function team() {
    const teamContainer = document.querySelector('#team .row')
    teamContainer.classList.add('carousel')
}