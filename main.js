(function($) {
    $(document).ready(function() {
        // Slickスライダー
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            centerMode: true,
            centerPadding: "0px",
            slidesToShow: 3,
            infinite: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        
// スムーススクロール（修正版）
$('a[href*="#"]').on('click', function(event) {
    if (this.pathname === window.location.pathname) {
        event.preventDefault();
        let target = $(this.getAttribute("href"));
        if (target.length) {
            $("html, body").animate({ scrollTop: target.offset().top }, 800);
        }
    }
});

        // ハンバーガーメニュー
        $('.toggle_btn').on('click', function() {
            $('.header').toggleClass('open');
        });

        $('#mask').on('click', function() {
            $('.header').removeClass('open');
        });


// 既存のコード（スライダー、スムーススクロール、ハンバーガーメニューなど）はそのまま
        
        // フロントページのみタイプライター表示とTypedテキスト表示を実行
        if (typeof myThemeVars !== 'undefined' && myThemeVars.isFrontPage) {
            // タイプライター表示
            let text = "Moritani Ai\nPortfolio Website";
            let index = 0;
            let speed = 100;
            function typeWriter() {
                if (index < text.length) {
                    let siteName = $(".site-name");
                    let currentChar = text[index] === "\n" ? "<br>" : text[index];
                    siteName.append(currentChar);
                    index++;
                    setTimeout(typeWriter, speed);
                }
            }
            typeWriter();

            // Typedテキスト表示
            setTimeout(() => {
                $(".typed").css({ opacity: 1, animation: "slideUp 1.5s ease-out forwards" });
            }, 1500);
        }

        // service要素表示
        function checkScroll() {
            $(".service").each(function() {
                let serviceTop = $(this).offset().top;
                let windowHeight = $(window).height();
                let scrollTop = $(window).scrollTop();
                if (serviceTop < windowHeight + scrollTop - 100) {
                    $(this).addClass("show");
                }
            });
        }
        $(window).on("scroll", checkScroll);
        checkScroll();
    });
})(jQuery);
