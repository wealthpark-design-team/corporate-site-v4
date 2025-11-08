/**
 * WealthPark Corporate Site v4 - Main JavaScript
 */

// Vanta.js Fog Effect
function initVanta() {
    const vantaBg = document.getElementById('vanta-bg');

    if (!vantaBg) {
        console.log('Vanta background element not found');
        return;
    }

    // THREE.jsとVANTAが読み込まれるまで待機
    if (typeof THREE === 'undefined' || typeof VANTA === 'undefined') {
        console.log('Waiting for THREE.js and VANTA to load...');
        setTimeout(initVanta, 100);
        return;
    }

    try {
        console.log('Initializing Vanta.js...');
        VANTA.FOG({
            el: "#vanta-bg",
            THREE: THREE,
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xebebff,
            midtoneColor: 0xb2c3ff,
            lowlightColor: 0xffbee6,
            baseColor: 0xffffff,
            speed: 2.00,
            zoom: 0.50
        });
        console.log('Vanta.js initialized successfully');

        // canvasを背景に固定
        setTimeout(() => {
            const canvas = document.querySelector('#vanta-bg canvas');
            if (canvas) {
                canvas.style.zIndex = '-1';
                console.log('Canvas z-index set to -1');
            }
        }, 100);
    } catch (error) {
        console.error('Failed to initialize Vanta:', error);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Vanta.js初期化
    initVanta();

    // タイプライター効果
    const typewriterEffect = () => {
        const texts = [
            'すべての人へ',
            'オルタナティブ資産への',
            '投資機会を。'
        ];
        const elements = [
            document.getElementById('type-line1'),
            document.getElementById('type-line2'),
            document.getElementById('type-line3')
        ];

        if (!elements[0]) return; // 要素がない場合は終了

        let currentLine = 0;
        let currentChar = 0;
        let showCursor = true;

        // カーソル点滅
        setInterval(() => {
            showCursor = !showCursor;
            if (currentLine < 3 && elements[currentLine]) {
                const cursor = showCursor ? '_' : '';
                const currentText = elements[currentLine].textContent.replace('_', '');
                if (currentChar < texts[currentLine].length) {
                    elements[currentLine].innerHTML = currentText + cursor;
                }
            }
        }, 530);

        // タイピング処理
        const typeNextChar = () => {
            if (currentLine >= texts.length) return;

            const currentText = texts[currentLine];
            const element = elements[currentLine];

            if (currentChar < currentText.length) {
                element.textContent = currentText.substring(0, currentChar + 1);
                currentChar++;
                setTimeout(typeNextChar, 50);
            } else {
                // 次の行へ
                setTimeout(() => {
                    currentLine++;
                    currentChar = 0;
                    typeNextChar();
                }, 300);
            }
        };

        typeNextChar();
    };

    typewriterEffect();

    // ========================================
    // Header: ハンバーガーメニュー
    // ========================================
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const siteHeader = document.getElementById('site-header');

    if (hamburgerBtn && siteHeader) {
        hamburgerBtn.addEventListener('click', () => {
            siteHeader.classList.toggle('menu-open');
            // メニューが開いたときにbodyのスクロールを防止
            if (siteHeader.classList.contains('menu-open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    }

    // ========================================
    // Header: モバイルサブメニューのアコーディオン
    // ========================================
    const submenuToggles = document.querySelectorAll('.submenu-toggle');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parent = toggle.closest('.has-submenu');

            // 他のサブメニューを閉じる
            document.querySelectorAll('.has-submenu').forEach(item => {
                if (item !== parent) {
                    item.classList.remove('open');
                }
            });

            // クリックしたサブメニューの開閉を切り替え
            parent.classList.toggle('open');
        });
    });

    // ========================================
    // Header: モバイルメニュー内のリンククリック時にメニューを閉じる
    // ========================================
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');

    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (siteHeader) {
                siteHeader.classList.remove('menu-open');
                document.body.style.overflow = '';
            }
        });
    });

    // ========================================
    // Footer: トップに戻るボタン
    // ========================================
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
