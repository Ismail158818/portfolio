const data = {
    ar: {
        dir: 'rtl', lang: 'ar',
        nav: ['الرئيسية','من أنا','أعمالي','المهارات','تواصل'],
        heroName: 'م. إسماعيل محمود بصبوص',
        heroJob: 'مطور ويب متكامل | Full Stack Web Developer',
        heroSummary: 'مطور ويب متكامل متمرس في بناء تطبيقات ويب متكاملة من الواجهة الأمامية إلى الخلفية. شغوف بتقديم حلول ويب متكاملة وفعالة وآمنة.',
        heroBtn: 'شاهد أعمالي',
        aboutTitle: 'من أنا؟',
        aboutBio: 'المهندس إسماعيل محمود بصبوص مطور ويب متكامل بخبرة عملية في بناء تطبيقات ويب متكاملة. أتمتع بمهارات قوية في Frontend (HTML, CSS, JavaScript, Bootstrap) و Backend (PHP, Laravel, MySQL) مع خبرة في تصميم واجهات المستخدم التفاعلية وقواعد البيانات المتقدمة. ماهر في RESTful APIs والتواصل الفوري ودمج الدفع الإلكتروني. أتمتع بقدرات حل المشكلات وشغف بتقديم حلول ويب متكاملة وفعالة.',
        contactInfo: [
            '<i class="fas fa-envelope"></i> ismahel680@gmail.com',
            '<i class="fab fa-whatsapp"></i> <a href="https://wa.me/963936147908" target="_blank" style="text-decoration:none;color:inherit">تواصل واتساب</a>',
            '<i class="fas fa-map-marker-alt"></i> دمشق، سوريا'
        ],
        contactFormTitle: 'تواصل معي',
        formName: 'الاسم',
        formEmail: 'البريد الإلكتروني',
        formMsg: 'رسالتك',
        formSendBtn: 'إرسال',
        portfolioTitle: 'أعمالي ومشاريعي',
        projects: [
            {
                title: 'منصة تواصل اجتماعي',
        desc: 'منصة متكاملة للتواصل الاجتماعي مبنية بتقنيات متقدمة. تشمل مصادقة المستخدمين، منشورات، تعليقات، متابعة/حظر، مجموعات، ودردشة فورية.\n\nBackend: Laravel مع PHP وMySQL لقاعدة البيانات المتقدمة مع RESTful API متكامل.\n\nFrontend: واجهات مستخدم تفاعلية وجذابة باستخدام HTML5 و CSS3 مع JavaScript للتفاعل الديناميكي وBootstrap للتصميم المتجاوب.',
        img: 'social/1.png',
        gallery: ['social/1.png','social/2.png','social/3.png','social/4.png'],
        github: 'https://github.com/Ismail158818/Social-Media-Blatform',
        details: `<ul><li>تسجيل ودخول المستخدمين مع مصادقة آمنة</li><li>إمكانية النشر، التعليق، المتابعة والحظر</li><li>دعم إنشاء المجموعات والدردشة الفورية عبر Chatify</li><li>نظام بحث وتصفية متقدم للمنشورات</li><li>لوحة تحكم للإدارة وتحليل البيانات</li><li>RESTful API متكامل</li></ul>`
            },
            {
                title: 'متجر كتب إلكتروني',
                desc: 'متجر إلكتروني متكامل لإدارة الكتب مبني بتقنيات Backend متقدمة. يشمل إدارة الكتب، التصنيفات، المفضلة، والدفع الإلكتروني عبر Stripe. Backend: Laravel, PHP, MySQL مع RESTful API متكامل.',
                img: 'Book/1.png',
                gallery: ['Book/1.png','Book/2.png','Book/3.png','Book/4.png'],
                github: 'https://github.com/Ismail158818/Book-Store',
                details: `<ul><li>إدارة وتصنيف الكتب</li><li>إضافة للمفضلة</li><li>دعم الدفع الإلكتروني</li><li>واجهة API متكاملة</li><li>لوحة تحكم للإدارة</li></ul>`
            },
            {
                title: 'منصة إدارة استبيانات',
                desc: 'منصة متقدمة لإنشاء الاستبيانات وجمع الردود مبني بتقنيات متطورة. يشمل نظام تحليل بيانات متقدم ودعم تصدير النتائج.\n\nBackend: Laravel مع PHP وMySQL مع خوارزميات برمجة ديناميكية وجينية.\n\nFrontend: واجهات مستخدم تفاعلية وسهلة الاستخدام باستخدام HTML5 و CSS3 مع JavaScript للتفاعل وBootstrap للتصميم المتجاوب.',
                img: 'survey/1.png',
                gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
                github: 'https://github.com/Ismail158818/Surveys-Website',
                details: `<ul><li>إنشاء استبيانات وجمع الردود</li><li>تخزين البيانات بأمان</li><li>دمج خوارزميات متقدمة للتحليل</li><li>تصدير النتائج وتحليلها</li></ul>`
            },
            {
                title: 'موقع أفلام ومسلسلات',
                desc: 'منصة متكاملة لإدارة محتوى الأفلام والمسلسلات مبني بتقنيات Backend متقدمة. يشمل البحث، التصنيف، المفضلة، والتنزيل. Backend: Laravel, PHP, MySQL مع نظام إدارة حلقات متكامل وRESTful API.',
                img: 'CineHub/1.png',
                gallery: ['CineHub/1.png','CineHub/2.png','CineHub/3.png','CineHub/4.png'],
                github: 'https://github.com/Ismail158818/CineHub',
                details: `<ul><li>إضافة وتعديل الأفلام والمسلسلات</li><li>بحث وتصنيف متقدم</li><li>إضافة للمفضلة</li><li>إدارة الحلقات</li><li>رفع صور متعددة لكل عمل</li></ul>`
            },
            {
                title: 'تطبيق قائمة مهام',
                desc: 'تطبيق ويب متكامل لإدارة المهام مبني بتقنيات متطورة. يشمل تصنيفات، تتبع الحالة، مؤشرات التأخير، ونظام إشعارات.\n\nBackend: Laravel مع PHP وMySQL مع نظام إشعارات متقدم.\n\nFrontend: واجهة مستخدم نظيفة ومتجاوبة باستخدام HTML5 و CSS3 مع JavaScript للتفاعل الديناميكي وBootstrap للتصميم المتجاوب.',
                img: 'todolist/1.png',
                gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
                github: 'https://github.com/Ismail158818/To-Do-List',
                details: `<ul><li>إضافة وتصنيف المهام</li><li>تتبع حالة المهام</li><li>تنبيهات للمهام المتأخرة</li><li>تصدير المهام</li></ul>`
            },
            {
                title: 'منصة إدارة فعاليات',
                desc: 'نظام متكامل لإدارة الفعاليات مبني بتقنيات Backend متقدمة. يشمل حجز تذاكر تلقائي، دفع إلكتروني عبر Stripe، وتصدير التقارير. Backend: Laravel, PHP, MySQL مع نظام إدارة حضور متكامل وRESTful API.',
                img: 'party/1.png',
                gallery: ['party/1.png','party/2.png','party/3.png','party/4.png'],
                github: 'https://github.com/Ismail158818/Party-Mangement',
                details: `<ul><li>حجز تذاكر تلقائي</li><li>دعم الدفع الإلكتروني عبر Stripe</li><li>تصدير تقارير الحضور</li></ul>`
            }
        ],
        skillsTitle: 'المهارات التقنية',
        skills: [
            {name: 'HTML', icon: 'fab fa-html5', level: 95},
            {name: 'CSS', icon: 'fab fa-css3-alt', level: 92},
            {name: 'JavaScript', icon: 'fab fa-js-square', level: 90},
            {name: 'PHP', icon: 'fab fa-php', level: 95},
            {name: 'Laravel', icon: 'fab fa-laravel', level: 92},
            {name: 'MySQL', icon: 'fas fa-database', level: 90},
            {name: 'Bootstrap', icon: 'fab fa-bootstrap', level: 90},
            {name: 'Git/GitHub', icon: 'fab fa-git-alt', level: 90},
            {name: 'RESTful API', icon: 'fas fa-plug', level: 90},
            {name: 'Pusher/Chatify', icon: 'fas fa-comments', level: 80},
            {name: 'Payment Integration', icon: 'fas fa-credit-card', level: 80}
        ],
        footerText: '',
        langBtn: 'EN'
    },
    en: {
        dir: 'ltr', lang: 'en',
        nav: ['Home','About','Portfolio','Skills','Contact'],
        heroName: 'Eng.ismail mahmoud Basbous',
        heroJob: 'Full Stack Web Developer',
        heroSummary: 'Dedicated Full Stack Web Developer with hands-on experience in building complete web applications from frontend to backend. Passionate about delivering comprehensive and efficient web solutions.',
        heroBtn: 'View My Work',
        aboutTitle: 'About Me',
        aboutBio: 'Eng.ismail mahmoud Basbous, a Full Stack Web Developer with hands-on experience in building complete web applications. Proficient in Frontend (HTML, CSS, JavaScript, Bootstrap) and Backend (PHP, Laravel, MySQL) technologies. Skilled in user interface design, database design, real-time communication using Pusher/Chatify, payment integration (Stripe), and version control with Git/GitHub. Strong problem-solving abilities and a passion for delivering comprehensive and efficient web solutions. Committed to continuous learning and contributing to impactful software projects.',
        contactInfo: [
            '<i class="fas fa-envelope"></i> ismahel680@gmail.com',
            '<i class="fab fa-whatsapp"></i> <a href="https://wa.me/963936147908" target="_blank" style="text-decoration:none;color:inherit">Contact via WhatsApp</a>',
            '<i class="fas fa-map-marker-alt"></i> Damascus, Syria'
        ],
        contactFormTitle: 'Contact Me',
        formName: 'Name',
        formEmail: 'Email',
        formMsg: 'Your Message',
        formSendBtn: 'Send',
        portfolioTitle: 'My Projects',
        projects: [
            {
                title: 'Social Media Platform',
desc: 'Developed a comprehensive social media platform using advanced technologies. Features include secure user authentication, post creation, commenting, follow/block functionality, group management, and real-time chat using Chatify and Pusher.\n\nBackend: Laravel with PHP and MySQL for advanced database management with integrated RESTful API.\n\nFrontend: Interactive and attractive user interfaces using HTML5 and CSS3 with JavaScript for dynamic interaction and Bootstrap for responsive design.',
img: 'social/1.png',
gallery: ['social/1.png','social/2.png','social/3.png','social/4.png'],
github: 'https://github.com/Ismail158818/Social-Media-Blatform',
details: `<ul><li>Secure user registration and authentication</li><li>Post creation, comments, and follow/block features</li><li>Group creation and real-time chat via Chatify and Pusher</li><li>Advanced post search and filtering</li></ul>`
    },
            {
                title: 'Online Bookstore',
                desc: 'Designed an online bookstore using advanced Backend technologies. Features include book management, categories, favorites, and integrated electronic payment via Stripe. Backend: Laravel, PHP, MySQL with integrated RESTful API.',
                img: 'Book/1.png',
                gallery: ['Book/1.png','Book/2.png','Book/3.png','Book/4.png'],
                github: 'https://github.com/Ismail158818/Book-Store',
                details: `<ul><li>Book management and categorization</li><li>Add to favorites</li><li>Electronic payment support</li><li>Full-featured API</li></ul>`
            },
            {
                title: 'Survey Management Platform',
                desc: 'Developed a survey management platform using advanced technologies. Features include survey creation, response collection, advanced data analysis, and result export.\n\nBackend: Laravel with PHP and MySQL with dynamic and genetic algorithms.\n\nFrontend: Interactive and user-friendly interfaces using HTML5 and CSS3 with JavaScript for interaction and Bootstrap for responsive design.',
                img: 'survey/1.png',
                gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
                github: 'https://github.com/Ismail158818/Surveys-Website',
                details: `<ul><li>Create surveys and collect responses</li><li>Secure data storage</li><li>Advanced algorithms for analysis</li></ul>`
            },
            {
                title: 'Movies and TV Shows Website',
                desc: 'Content management platform for movies and TV shows built with advanced Backend technologies. Features include search, categorization, favorites, and download capabilities. Backend: Laravel, PHP, MySQL with integrated episode management system and RESTful API.',
                img: 'CineHub/1.png',
                gallery: ['CineHub/1.png','CineHub/2.png','CineHub/3.png','CineHub/4.png'],
                github: 'https://github.com/Ismail158818/CineHub',
                details: `<ul><li>Add/edit movies and series</li><li>Advanced search and categorization</li><li>Add to favorites</li><li>Episode management</li></ul>`
            },
            {
                title: 'To-Do List Application',
                desc: 'Task management app built with advanced technologies. Features include task categorization, status tracking, overdue markers, and notification system.\n\nBackend: Laravel with PHP and MySQL with advanced notification system.\n\nFrontend: Clean and responsive user interface using HTML5 and CSS3 with JavaScript for dynamic interaction and Bootstrap for responsive design.',
                img: 'todolist/1.png',
                gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
                github: 'https://github.com/Ismail158818/To-Do-List',
                details: `<ul><li>Add and categorize tasks</li><li>Status tracking</li><li>Overdue task alerts</li></ul>`
            },
            {
                title: 'Event Management Platform',
                desc: 'Event management system built with advanced Backend technologies. Features include automated ticket reservation, Stripe payment integration, and attendance report export. Backend: Laravel, PHP, MySQL with integrated attendance management system and RESTful API.',
                img: 'party/1.png',
                gallery: ['party/1.png','party/2.png','party/3.png','party/4.png'],
                github: 'https://github.com/Ismail158818/Party-Mangement',
                details: `<ul><li>Automated ticket reservation</li><li>Stripe payment support</li></ul>`
            }
        ],
        skillsTitle: 'Technical Skills',
        skills: [
            {name: 'HTML', icon: 'fab fa-html5', level: 95},
            {name: 'CSS', icon: 'fab fa-css3-alt', level: 92},
            {name: 'JavaScript', icon: 'fab fa-js-square', level: 90},
            {name: 'Laravel', icon: 'fab fa-laravel', level: 92},
            {name: 'PHP', icon: 'fab fa-php', level: 95},
            {name: 'MySQL', icon: 'fas fa-database', level: 90},
            {name: 'Bootstrap', icon: 'fab fa-bootstrap', level: 90},
            {name: 'Git/GitHub', icon: 'fab fa-git-alt', level: 90},
            {name: 'RESTful API', icon: 'fab fa-plug', level: 90},
            {name: 'Pusher', icon: 'fas fa-comments', level: 80},
            {name: 'Payment Integration', icon: 'fab fa-credit-card', level: 80}
        ],
        footerText: '',
        langBtn: 'AR'
    }
};
let currentLang = 'ar';
const projectDetails = {
    ar: [
        {
            title: 'منصة تواصل اجتماعي',
            desc: 'منصة متكاملة للتواصل الاجتماعي مبنية باستخدام Laravel وPHP وHTML وCSS وBootstrap وJavaScript. تشمل مصادقة المستخدمين، منشورات، تعليقات، متابعة/حظر، مجموعات، ودردشة فورية. تم التركيز على الأمان، الأداء، وتجربة المستخدم. تم تطبيق تقنيات WebSocket للدردشة الفورية، ونظام إشعارات متقدم، مع لوحة تحكم للإدارة وتحليل البيانات. خبرتي في بناء هذا المشروع شملت تصميم قاعدة بيانات مرنة، وتكامل مع خدمات خارجية مثل Chatify وPusher، بالإضافة إلى بناء RESTful API متكامل.',
            img: 'social/1.png',
            gallery: ['social/1.png','social/2.png','social/3.png','social/4.png'],
            github: 'https://github.com/Ismail158818/social-media-platform',
            details: `<ul><li>تسجيل ودخول المستخدمين مع مصادقة آمنة</li><li>إمكانية النشر، التعليق، المتابعة والحظر</li><li>دعم إنشاء المجموعات والدردشة الفورية عبر Chatify</li><li>نظام بحث وتصفية متقدم للمنشورات</li><li>لوحة تحكم للإدارة وتحليل البيانات</li><li>RESTful API متكامل</li></ul>`
        },
        {
            title: 'متجر كتب إلكتروني',
            desc: 'متجر إلكتروني متكامل لإدارة الكتب، التصنيفات، المفضلة، والدفع الإلكتروني. تم بناء واجهة برمجة تطبيقات RESTful، مع لوحة تحكم للإدارة، ونظام تصنيف متقدم. تم التركيز على تجربة المستخدم وسهولة البحث والتصفح، مع دعم الدفع الإلكتروني عبر Stripe. خبرتي شملت بناء نظام إدارة المخزون، وتكامل مع خدمات الدفع، وتصميم قاعدة بيانات فعالة.',
            img: 'Book/1.png',
            gallery: ['Book/1.png','Book/2.png','Book/3.png','Book/4.png'],
            github: 'https://github.com/Ismail158818/Book-Store',
            details: `<ul><li>إدارة وتصنيف الكتب</li><li>إضافة للمفضلة</li><li>دعم الدفع الإلكتروني</li><li>واجهة API متكاملة</li><li>لوحة تحكم للإدارة</li></ul>`
        },
        {
            title: 'منصة إدارة استبيانات',
            desc: 'منصة متقدمة لإنشاء الاستبيانات وجمع الردود، مع خوارزميات برمجة ديناميكية وجينية لتوجيه المستثمرين وتحسين النقل. تم بناء نظام تحليل بيانات متقدم، مع واجهة مستخدم سهلة، ودعم تصدير النتائج. خبرتي شملت بناء خوارزميات تحليل مخصصة، وتكامل مع أدوات إحصائية، وتصميم واجهات تفاعلية.',
            img: 'survey/1.png',
            gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
            github: 'https://github.com/Ismail158818/Surveys-Website',
            details: `<ul><li>إنشاء استبيانات وجمع الردود</li><li>تخزين البيانات بأمان</li><li>دمج خوارزميات متقدمة للتحليل</li><li>تصدير النتائج وتحليلها</li></ul>`
        },
        {
            title: 'موقع أفلام ومسلسلات',
            desc: 'منصة متكاملة لإدارة محتوى الأفلام والمسلسلات مع ميزات البحث، التصنيف، المفضلة، والتنزيل. تم بناء نظام إدارة حلقات، مع دعم رفع الصور، ونظام تصنيف متقدم. خبرتي شملت بناء لوحة تحكم للإدارة، وتكامل مع واجهات برمجة تطبيقات خارجية لجلب بيانات الأفلام، وتصميم واجهات مستخدم جذابة.',
            img: 'CineHub/1.png',
            gallery: ['CineHub/1.png','CineHub/2.png','CineHub/3.png','CineHub/4.png'],
            github: 'https://github.com/Ismail158818/CineHub',
            details: `<ul><li>إضافة وتعديل الأفلام والمسلسلات</li><li>بحث وتصنيف متقدم</li><li>إضافة للمفضلة</li><li>إدارة الحلقات</li><li>رفع صور متعددة لكل عمل</li></ul>`
        },
        {
            title: 'تطبيق قائمة مهام',
            desc: 'تطبيق ويب متكامل لإدارة المهام مع تصنيفات، تتبع الحالة، مؤشرات التأخير، وواجهة مستخدم نظيفة. تم بناء نظام إشعارات للمهام المتأخرة، مع دعم تصدير المهام، ولوحة تحكم للإدارة. خبرتي شملت بناء نظام صلاحيات، وتصميم قاعدة بيانات مرنة، وتكامل مع خدمات خارجية.',
            img: 'todolist/1.png',
            gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
            github: 'https://github.com/Ismail158818/To-Do-List',
            details: `<ul><li>إضافة وتصنيف المهام</li><li>تتبع حالة المهام</li><li>تنبيهات للمهام المتأخرة</li><li>تصدير المهام</li></ul>`
        },
        {
            title: 'منصة إدارة فعاليات',
            desc: 'نظام متكامل لإدارة الفعاليات مع حجز تذاكر تلقائي ودفع إلكتروني عبر Stripe. تم بناء نظام إدارة حضور، مع دعم تصدير التقارير، ولوحة تحكم للإدارة. خبرتي شملت بناء نظام حجز تذاكر، وتكامل مع خدمات الدفع، وتصميم واجهات مستخدم تفاعلية.',
            img: 'party/1.png',
            gallery: ['party/1.png','party/2.png','party/3.png','party/4.png'],
            github: 'https://github.com/Ismail158818/Party-Mangement',
            details: `<ul><li>حجز تذاكر تلقائي</li><li>دعم الدفع الإلكتروني عبر Stripe</li><li>تصدير تقارير الحضور</li></ul>`
        }
    ]
};
function renderProjects(lang) {
    const projectsList = document.getElementById('projectsList');
    projectsList.innerHTML = '';
    
    // استخدم data[lang].projects بدلاً من projectDetails[lang]
    data[lang].projects.forEach((proj, idx) => {
        const col = document.createElement('div');
        col.className = 'col-md-4';
        col.innerHTML = `<div class="card project-card h-100 project-modal-trigger" data-idx="${idx}">\
            <img src="${proj.img}" class="project-img" alt="${proj.title}">\
            <div class="card-body d-flex flex-column">\
                <h5 class="project-title mb-2">${proj.title}</h5>\
                <p class="card-text mb-3">${proj.desc}</p>\
                <div class="mt-auto project-links">\
                    <a href="${proj.github}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fab fa-github"></i></a>\
                </div>\
            </div>\
        </div>`;
        projectsList.appendChild(col);
    });

    document.querySelectorAll('.project-modal-trigger').forEach(card => {
        card.onclick = function() {
            const idx = this.getAttribute('data-idx');
            const proj = data[lang].projects[idx]; // استخدم data[lang].projects هنا أيضاً
            document.getElementById('projectModalLabel').textContent = proj.title;
            
            // بناء الكاروسيل
            let carouselHtml = '';
            proj.gallery.forEach((img, i) => {
                carouselHtml += `<div class='carousel-item${i===0?' active':''}'>\
                    <img src='${img}' class='d-block w-100 rounded' style='max-height:320px;object-fit:cover;' alt='صورة المشروع'>\
                </div>`;
            });
            document.getElementById('carouselInner').innerHTML = carouselHtml;
            document.getElementById('modalDesc').textContent = proj.desc;
            document.getElementById('modalDetails').innerHTML = proj.details;
            document.getElementById('modalGithub').href = proj.github;
            var modal = new bootstrap.Modal(document.getElementById('projectModal'));
            modal.show();
        };
    });

}
function renderAll(lang) {
    document.documentElement.dir = data[lang].dir;
    document.documentElement.lang = data[lang].lang;
    const navs = document.querySelectorAll('.navbar-nav .nav-link');
    navs.forEach((el, i) => { el.textContent = data[lang].nav[i]; });
    document.getElementById('heroName').textContent = data[lang].heroName;
    document.getElementById('heroJob').textContent = data[lang].heroJob;
    document.getElementById('heroSummary').textContent = data[lang].heroSummary;
    document.querySelector('.hero .btn').textContent = data[lang].heroBtn;
    document.getElementById('aboutTitle').textContent = data[lang].aboutTitle;
    document.getElementById('aboutBio').textContent = data[lang].aboutBio;
    const cinfo = document.getElementById('contactInfo');
    cinfo.innerHTML = '';
    data[lang].contactInfo.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = item;
        cinfo.appendChild(li);
    });
    document.getElementById('portfolioTitle').textContent = data[lang].portfolioTitle;
    renderProjects(lang);
    document.getElementById('skillsTitle').textContent = data[lang].skillsTitle;
    const skillsList = document.getElementById('skillsList');
    skillsList.innerHTML = '';
    data[lang].skills.forEach(skill => {
        const col = document.createElement('div');
        col.className = 'col-md-6';
        col.innerHTML = `<div class="d-flex align-items-center mb-2">\
            <i class="${skill.icon} skill-icon"></i>\
            <span class="me-2">${skill.name}</span>\
            <div class="progress flex-grow-1 ms-3">\
                <div class="progress-bar" style="width:${skill.level}%">${skill.level}%</div>\
            </div>\
        </div>`;
        skillsList.appendChild(col);
    });
    document.getElementById('footerText').textContent = data[lang].footerText;
    document.getElementById('langBtn').textContent = data[lang].langBtn;
    document.querySelector('.navbar').classList.toggle('navbar-rtl', lang==='ar');
}
document.getElementById('langBtn').addEventListener('click', function() {
    currentLang = currentLang === 'ar' ? 'en' : 'ar';
    renderAll(currentLang);
});
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        if(this.hash) {
            e.preventDefault();
            document.querySelector(this.hash).scrollIntoView({behavior:'smooth'});
        }
    });
});
function aosInit() {
    const els = document.querySelectorAll('[data-aos]');
    function check() {
        els.forEach(el => {
            const rect = el.getBoundingClientRect();
            if(rect.top < window.innerHeight - 100) {
                el.classList.add('aos-animate');
            }
        });
    }
    window.addEventListener('scroll', check);
    check();
}
renderAll(currentLang);
aosInit();
// Loader
window.addEventListener('load', function() {
    var loader = document.getElementById('loader');
    if(loader) loader.style.opacity = 0;
    setTimeout(function(){ if(loader) loader.style.display = 'none'; }, 500);
});
// Dark mode toggle
const darkBtn = document.getElementById('darkBtn');
darkBtn && darkBtn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
});
// Load dark mode from storage
if(localStorage.getItem('darkMode') === 'true') {
    document.body.classList.add('dark-mode');
}
// Language toggle (EN/AR)
const langBtn = document.getElementById('langBtn');
// تم حذف كود التنبيه لأن التبديل يعمل فعليًا
// Contact email button
const emailBtn = document.getElementById('emailContactBtn');
if(emailBtn) {
    emailBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = 'mailto:ismahel680@gmail.com';
    });
}

