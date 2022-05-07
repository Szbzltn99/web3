<div class>
<section class="footer">
    <div class="social">
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
    </div>

    <ul class="list">
        <li>
            <a href="#">Kezdőlap</a>
        </li>
        <li>
            <a href="#">Termékek</a>
        </li>
        <li>
            <a href="#">Kapcsolat</a>
        </li>
         <li>
            <a href="#">Blog</a>
        </li>
         <li>
            <a href="#">Privacy Policy</a>
        </li>

    </ul>

    <p class="copyright">
        © 2022 | Minden jog fenntartva Buborék design
    </p>

</section>
</div>



<script type="text/javascript">

    function getCookie(name) {
        var cookieValue = null;
        if (document.cookie && document.cookie !== '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].trim();
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) === (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }


    function uuidv4() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      });
    }




    let device = getCookie('device')

    if (device == null || device == undefined){
        device = uuidv4()
    }

    document.cookie ='device=' + device + ";domain=;path=/"

    const navSlide = () => {
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
    nav.classList.toggle('nav-active');

    navLinks.forEach((link, index) =>{
        if (link.style.animation) {
            link.style.animation = '';

        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .3}s`;
        }
    })

    burger.classList.toggle('toggle');
})





}

navSlide();


</script>