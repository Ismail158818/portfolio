const data = {
    ar: {
        dir: 'rtl', lang: 'ar',
        nav: ['الرئيسية','من أنا','أعمالي','المهارات','تواصل'],
        heroName: 'م. إسماعيل محمود بصبوص',
        heroJob: 'مطور ويب متكامل',
        heroSummary: 'مطور ويب متكامل متمرس في بناء تطبيقات الويب من الواجهة الأمامية إلى الخلفية، متخصص في Laravel لتطوير Backend وHTML/CSS/JavaScript لتطوير Frontend. شغوف بتقديم حلول متكاملة وفعالة',
        heroBtn: 'شاهد أعمالي',
        aboutTitle: 'من أنا؟',
        aboutBio: 'المهندس إسماعيل محمود بصبوص مطور Full Stack بخبرة عملية في بناء تطبيقات ويب متكاملة. ماهر في PHP وLaravel للBackend، وHTML وCSS وJavaScript للFrontend. لدي خبرة في بناء واجهات مستخدم تفاعلية باستخدام Bootstrap وJavaScript، بالإضافة إلى تطوير أنظمة Backend قوية باستخدام Laravel. أعمل على تقديم حلول متكاملة من البداية إلى النهاية، مع التركيز على تجربة المستخدم وأداء النظام.',
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
                desc: 'منصة متكاملة للتواصل الاجتماعي مبنية باستخدام Laravel للBackend وHTML/CSS/JavaScript للFrontend. تشمل واجهة مستخدم تفاعلية مع نظام مصادقة، إنشاء المنشورات، التعليقات، المتابعة، والمحادثات الفورية. قمت بتطوير كل من الواجهة الأمامية والخلفية لهذا المشروع.',
                img: 'social/1.png',
                gallery: ['social/1.png','social/2.png','social/3.png','social/4.png','social/5.png','social/6.png','social/7.png'],
                github: 'https://github.com/Ismail158818/social-media-platform',
                details: `<ul>
                    <li>واجهة مستخدم تفاعلية باستخدام HTML/CSS/JavaScript</li>
                    <li>نظام Backend باستخدام Laravel</li>
                    <li>مصادقة المستخدمين وتأمين البيانات</li>
                    <li>إنشاء المنشورات والتعليقات</li>
                    <li>نظام متابعة المستخدمين</li>
                    <li>دردشة فورية باستخدام WebSocket</li>
                </ul>`
            },
            {
                title: 'تطبيق قائمة مهام',
                desc: 'تطبيق ويب متكامل لإدارة المهام مع واجهة مستخدم نظيفة وسهلة الاستخدام. تم تطوير الواجهة الأمامية باستخدام HTML وCSS وJavaScript، بينما تم بناء نظام إدارة المهام باستخدام Laravel. يتضمن التطبيق ميزات مثل تصنيف المهام، تحديد الأولويات، وتنبيهات المواعيد النهائية.',
                img: 'todolist/1.png',
                gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
                github: 'https://github.com/Ismail158818/To-Do-List',
                details: `<ul>
                    <li>واجهة مستخدم جذابة وسهلة الاستخدام</li>
                    <li>إضافة وتعديل وحذف المهام</li>
                    <li>تصنيف المهام حسب الأولوية</li>
                    <li>تنبيهات المواعيد النهائية</li>
                    <li>نظام Backend آمن باستخدام Laravel</li>
                </ul>`
            },
            {
                title: 'منصة إدارة استبيانات',
                desc: 'منصة متقدمة لإنشاء وإدارة الاستبيانات مع واجهة مستخدم غنية بالميزات. قمت بتطوير الواجهة الأمامية باستخدام HTML وCSS وJavaScript مع التركيز على تجربة المستخدم، بينما تم بناء نظام إدارة الاستبيانات وتحليل النتائج باستخدام Laravel.',
                img: 'survey/1.png',
                gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
                github: 'https://github.com/Ismail158818/Surveys-Website',
                details: `<ul>
                    <li>واجهة إنشاء استبيانات سهلة الاستخدام</li>
                    <li>أنواع متعددة من الأسئلة (اختيار متعدد، نص، إلخ)</li>
                    <li>عرض النتائج وتحليلها</li>
                    <li>نظام إدارة المستجيبين</li>
                    <li>تصدير النتائج بتنسيقات مختلفة</li>
                </ul>`
            },
            {
                title: 'متجر كتب إلكتروني',
                desc: 'متجر إلكتروني متكامل لإدارة الكتب مع واجهة برمجة تطبيقات RESTful. تم التركيز على بناء نظام Backend قوي باستخدام Laravel مع دعم كامل للدفع الإلكتروني وإدارة المخزون.',
                img: 'Book/1.png',
                gallery: ['Book/1.png','Book/2.png','Book/3.png','Book/4.png'],
                github: 'https://github.com/Ismail158818/Book-Store',
                details: `<ul>
                    <li>نظام إدارة الكتب والفئات</li>
                    <li>عربة تسوق ودفع إلكتروني</li>
                    <li>واجهة برمجة تطبيقات RESTful</li>
                    <li>لوحة تحكم للإدارة</li>
                    <li>نظام تقييم الكتب</li>
                </ul>`
            },
            {
                title: 'موقع أفلام ومسلسلات',
                desc: 'منصة لإدارة محتوى الأفلام والمسلسلات مع نظام تصنيف متقدم. تم بناء نظام Backend متكامل باستخدام Laravel مع دعم لإدارة المحتوى وتصنيفه.',
                img: 'CineHub/1.png',
                gallery: ['CineHub/1.png','CineHub/2.png','CineHub/3.png','CineHub/4.png'],
                github: 'https://github.com/Ismail158818/CineHub',
                details: `<ul>
                    <li>إدارة الأفلام والمسلسلات</li>
                    <li>نظام تصنيف وتقييم</li>
                    <li>بحث متقدم</li>
                    <li>لوحة تحكم للإدارة</li>
                </ul>`
            },
            {
                title: 'منصة إدارة فعاليات',
                desc: 'نظام متكامل لإدارة الفعاليات مع حجز تذاكر تلقائي ودفع إلكتروني. تم بناء نظام Backend قوي باستخدام Laravel مع دعم كامل لإدارة الفعاليات والحضور.',
                img: 'party/1.png',
                gallery: ['party/1.png','party/2.png','party/3.png','party/4.png'],
                github: 'https://github.com/Ismail158818/Party-Mangement',
                details: `<ul>
                    <li>إنشاء الفعاليات وإدارتها</li>
                    <li>حجز التذاكر إلكترونياً</li>
                    <li>نظام الدفع الإلكتروني</li>
                    <li>إدارة الحضور</li>
                </ul>`
            }
        ],
        skillsTitle: 'المهارات التقنية',
        skills: [
            {name: 'HTML5', icon: 'fab fa-html5', level: 90},
            {name: 'CSS3', icon: 'fab fa-css3-alt', level: 85},
            {name: 'JavaScript', icon: 'fab fa-js', level: 80},
            {name: 'PHP', icon: 'fab fa-php', level: 95},
            {name: 'Laravel', icon: 'fab fa-laravel', level: 92},
            {name: 'MySQL', icon: 'fas fa-database', level: 90},
            {name: 'Bootstrap', icon: 'fab fa-bootstrap', level: 90},
            {name: 'Git/GitHub', icon: 'fab fa-git-alt', level: 90},
            {name: 'RESTful API', icon: 'fas fa-plug', level: 90}
        ],
        footerText: '',
        langBtn: 'EN'
    },
    en: {
        dir: 'ltr', lang: 'en',
        nav: ['Home','About','Portfolio','Skills','Contact'],
        heroName: 'Eng. Ismail Mahmoud Basbous',
        heroJob: 'Full Stack Developer ',
        heroSummary: 'Experienced Full Stack Developer skilled in building complete web applications from frontend to backend. Specialized in Laravel for backend and HTML/CSS/JavaScript for frontend. Passionate about delivering integrated and efficient solutions.',
        heroBtn: 'View My Work',
        aboutTitle: 'About Me',
        aboutBio: 'Eng. Ismail Mahmoud Basbous, a Full Stack Developer with hands-on experience in building complete web applications. Proficient in PHP and Laravel for backend development, and HTML, CSS, and JavaScript for frontend development. Experienced in building interactive user interfaces using Bootstrap and JavaScript, as well as developing robust backend systems with Laravel. I focus on delivering end-to-end solutions with emphasis on user experience and system performance.',
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
                desc: 'A comprehensive social media platform built with Laravel for backend and HTML/CSS/JavaScript for frontend. Features an interactive user interface with authentication system, post creation, comments, following, and real-time chat. I developed both frontend and backend for this project.',
                img: 'social/1.png',
                gallery: ['social/1.png','social/2.png','social/3.png','social/4.png','social/5.png','social/6.png','social/7.png'],
                github: 'https://github.com/Ismail158818/social-media-platform',
                details: `<ul>
                    <li>Interactive UI with HTML/CSS/JavaScript</li>
                    <li>Backend system using Laravel</li>
                    <li>User authentication and data security</li>
                    <li>Post creation and comments</li>
                    <li>User following system</li>
                    <li>Real-time chat using WebSocket</li>
                </ul>`
            },
            {
                title: 'To-Do List Application',
                desc: 'A complete web application for task management with clean and user-friendly interface. The frontend was developed using HTML, CSS, and JavaScript, while the task management system was built with Laravel. Features include task categorization, priority setting, and deadline alerts.',
                img: 'todolist/1.png',
                gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
                github: 'https://github.com/Ismail158818/To-Do-List',
                details: `<ul>
                    <li>Attractive and easy-to-use interface</li>
                    <li>Add, edit, and delete tasks</li>
                    <li>Task categorization by priority</li>
                    <li>Deadline alerts</li>
                    <li>Secure backend system with Laravel</li>
                </ul>`
            },
            {
                title: 'Survey Management Platform',
                desc: 'An advanced platform for creating and managing surveys with a feature-rich user interface. I developed the frontend using HTML, CSS, and JavaScript with focus on user experience, while the survey management and results analysis system was built with Laravel.',
                img: 'survey/1.png',
                gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
                github: 'https://github.com/Ismail158818/Surveys-Website',
                details: `<ul>
                    <li>Easy-to-use survey creation interface</li>
                    <li>Multiple question types (multiple choice, text, etc)</li>
                    <li>Results visualization and analysis</li>
                    <li>Respondent management system</li>
                    <li>Export results in different formats</li>
                </ul>`
            },
            {
                title: 'Online Bookstore',
                desc: 'A complete e-commerce platform for book management with RESTful API. Focused on building a robust backend system using Laravel with full support for electronic payments and inventory management.',
                img: 'Book/1.png',
                gallery: ['Book/1.png','Book/2.png','Book/3.png','Book/4.png'],
                github: 'https://github.com/Ismail158818/Book-Store',
                details: `<ul>
                    <li>Book and category management</li>
                    <li>Shopping cart and electronic payment</li>
                    <li>RESTful API</li>
                    <li>Admin dashboard</li>
                    <li>Book rating system</li>
                </ul>`
            },
            {
                title: 'Movies and TV Shows Website',
                desc: 'A content management platform for movies and TV shows with advanced rating system. Built a complete backend system using Laravel with support for content management and categorization.',
                img: 'CineHub/1.png',
                gallery: ['CineHub/1.png','CineHub/2.png','CineHub/3.png','CineHub/4.png'],
                github: 'https://github.com/Ismail158818/CineHub',
                details: `<ul>
                    <li>Movies and series management</li>
                    <li>Rating and review system</li>
                    <li>Advanced search</li>
                    <li>Admin dashboard</li>
                </ul>`
            },
            {
                title: 'Event Management Platform',
                desc: 'A complete system for event management with automatic ticket reservation and electronic payment. Built a robust backend system using Laravel with full support for event and attendance management.',
                img: 'party/1.png',
                gallery: ['party/1.png','party/2.png','party/3.png','party/4.png'],
                github: 'https://github.com/Ismail158818/Party-Mangement',
                details: `<ul>
                    <li>Event creation and management</li>
                    <li>Electronic ticket reservation</li>
                    <li>Payment system</li>
                    <li>Attendance management</li>
                </ul>`
            }
        ],
        skillsTitle: 'Technical Skills',
        skills: [
            {name: 'HTML5', icon: 'fab fa-html5', level: 90},
            {name: 'CSS3', icon: 'fab fa-css3-alt', level: 85},
            {name: 'JavaScript', icon: 'fab fa-js', level: 80},
            {name: 'PHP', icon: 'fab fa-php', level: 95},
            {name: 'Laravel', icon: 'fab fa-laravel', level: 92},
            {name: 'MySQL', icon: 'fas fa-database', level: 90},
            {name: 'Bootstrap', icon: 'fab fa-bootstrap', level: 90},
            {name: 'Git/GitHub', icon: 'fab fa-git-alt', level: 90},
            {name: 'RESTful API', icon: 'fas fa-plug', level: 90}
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
            desc: 'منصة متكاملة للتواصل الاجتماعي مبنية باستخدام Laravel للBackend وHTML/CSS/JavaScript للFrontend. تشمل واجهة مستخدم تفاعلية مع نظام مصادقة، إنشاء المنشورات، التعليقات، المتابعة، والمحادثات الفورية. قمت بتطوير كل من الواجهة الأمامية والخلفية لهذا المشروع.',
            img: 'social/1.png',
            gallery: ['social/1.png','social/2.png','social/3.png','social/4.png'],
            github: 'https://github.com/Ismail158818/social-media-platform',
            details: `<ul>
                <li>واجهة مستخدم تفاعلية باستخدام HTML/CSS/JavaScript</li>
                <li>نظام Backend باستخدام Laravel</li>
                <li>مصادقة المستخدمين وتأمين البيانات</li>
                <li>إنشاء المنشورات والتعليقات</li>
                <li>نظام متابعة المستخدمين</li>
                <li>دردشة فورية باستخدام WebSocket</li>
            </ul>`
        },
        {
            title: 'تطبيق قائمة مهام',
            desc: 'تطبيق ويب متكامل لإدارة المهام مع واجهة مستخدم نظيفة وسهلة الاستخدام. تم تطوير الواجهة الأمامية باستخدام HTML وCSS وJavaScript، بينما تم بناء نظام إدارة المهام باستخدام Laravel. يتضمن التطبيق ميزات مثل تصنيف المهام، تحديد الأولويات، وتنبيهات المواعيد النهائية.',
            img: 'todolist/1.png',
            gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
            github: 'https://github.com/Ismail158818/To-Do-List',
            details: `<ul>
                <li>واجهة مستخدم جذابة وسهلة الاستخدام</li>
                <li>إضافة وتعديل وحذف المهام</li>
                <li>تصنيف المهام حسب الأولوية</li>
                <li>تنبيهات المواعيد النهائية</li>
                <li>نظام Backend آمن باستخدام Laravel</li>
            </ul>`
        },
        {
            title: 'منصة إدارة استبيانات',
            desc: 'منصة متقدمة لإنشاء وإدارة الاستبيانات مع واجهة مستخدم غنية بالميزات. قمت بتطوير الواجهة الأمامية باستخدام HTML وCSS وJavaScript مع التركيز على تجربة المستخدم، بينما تم بناء نظام إدارة الاستبيانات وتحليل النتائج باستخدام Laravel.',
            img: 'survey/1.png',
            gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
            github: 'https://github.com/Ismail158818/Surveys-Website',
            details: `<ul>
                <li>واجهة إنشاء استبيانات سهلة الاستخدام</li>
                <li>أنواع متعددة من الأسئلة (اختيار متعدد، نص، إلخ)</li>
                <li>عرض النتائج وتحليلها</li>
                <li>نظام إدارة المستجيبين</li>
                <li>تصدير النتائج بتنسيقات مختلفة</li>
            </ul>`
        }
    ],
    en: [
        {
            title: 'Social Media Platform',
            desc: 'A comprehensive social media platform built with Laravel for backend and HTML/CSS/JavaScript for frontend. Features an interactive user interface with authentication system, post creation, comments, following, and real-time chat. I developed both frontend and backend for this project.',
            img: 'social/1.png',
            gallery: ['social/1.png','social/2.png','social/3.png','social/4.png'],
            github: 'https://github.com/Ismail158818/social-media-platform',
            details: `<ul>
                <li>Interactive UI with HTML/CSS/JavaScript</li>
                <li>Backend system using Laravel</li>
                <li>User authentication and data security</li>
                <li>Post creation and comments</li>
                <li>User following system</li>
                <li>Real-time chat using WebSocket</li>
            </ul>`
        },
        {
            title: 'To-Do List Application',
            desc: 'A complete web application for task management with clean and user-friendly interface. The frontend was developed using HTML, CSS, and JavaScript, while the task management system was built with Laravel. Features include task categorization, priority setting, and deadline alerts.',
            img: 'todolist/1.png',
            gallery: ['todolist/1.png','todolist/2.png','todolist/3.png','todolist/4.png'],
            github: 'https://github.com/Ismail158818/To-Do-List',
            details: `<ul>
                <li>Attractive and easy-to-use interface</li>
                <li>Add, edit, and delete tasks</li>
                <li>Task categorization by priority</li>
                <li>Deadline alerts</li>
                <li>Secure backend system with Laravel</li>
            </ul>`
        },
        {
            title: 'Survey Management Platform',
            desc: 'An advanced platform for creating and managing surveys with a feature-rich user interface. I developed the frontend using HTML, CSS, and JavaScript with focus on user experience, while the survey management and results analysis system was built with Laravel.',
            img: 'survey/1.png',
            gallery: ['survey/1.png','survey/2.png','survey/3.png','survey/4.png'],
            github: 'https://github.com/Ismail158818/Surveys-Website',
            details: `<ul>
                <li>Easy-to-use survey creation interface</li>
                <li>Multiple question types (multiple choice, text, etc)</li>
                <li>Results visualization and analysis</li>
                <li>Respondent management system</li>
                <li>Export results in different formats</li>
            </ul>`
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

