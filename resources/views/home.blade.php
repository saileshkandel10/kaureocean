<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kaure Ocean Educational &amp; Consultancy – Japanese Language School &amp; Recruitment</title>
<meta name="description" content="Kaure Ocean Japanese Language School and Educational Consultancy in Kathmandu, Nepal. Licensed for SSW and TITP programs, Japanese language training, and career deployment to Japan.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Sans+Devanagari:wght@500;700&family=Shippori+Mincho:wght@500;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
<style>
:root{--ink:#102b66;--ink2:#1e5aa8;--paper:#faf8f4;--card:#fff;--text:#1d2a3d;--mute:#5f6b7d;--line:#e6e1d8;--red:#d8232a;--gold:#5db7ee;--shadow:0 10px 30px rgba(11,31,58,.08)}
@media(prefers-color-scheme:dark){:root:not([data-theme=light]){--ink:#0b1d44;--ink2:#1e5aa8;--paper:#0d1522;--card:#142036;--text:#e8ecf3;--mute:#9aa7bb;--line:#24324b;--red:#ef4a50;--shadow:0 10px 30px rgba(0,0,0,.35)}}
*{box-sizing:border-box;margin:0}
html{scroll-behavior:smooth}
body{font-family:'Noto Sans JP',system-ui,sans-serif;background:var(--paper);color:var(--text);line-height:1.65;-webkit-font-smoothing:antialiased}
h1,h2,h3{font-family:'Shippori Mincho','Noto Sans JP',serif;line-height:1.2;letter-spacing:-.01em}
a{color:inherit;text-decoration:none}
.wrap{max-width:1160px;margin:0 auto;padding:0 24px}
.top{background:var(--ink);color:#cbd5e6;font-size:.8rem}
.top .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;padding-top:8px;padding-bottom:8px}
.top span{margin-right:18px}.lic{color:var(--gold)}
nav{position:sticky;top:0;z-index:20;background:color-mix(in srgb,var(--paper) 88%,transparent);backdrop-filter:blur(12px);border-bottom:1px solid var(--line)}
nav .wrap{display:flex;align-items:center;justify-content:space-between;height:72px}
.brand{display:flex;align-items:center;gap:12px}
.logo{border-radius:50%;display:block}.seal{width:40px;height:40px;border-radius:50%;background:var(--red);color:#fff;display:grid;place-items:center;font-family:'Shippori Mincho',serif;font-weight:800;font-size:1.15rem}
.brand b{color:var(--ink);display:block;font-family:'Shippori Mincho',serif;font-size:1.15rem;letter-spacing:.04em}
.brand small{color:var(--mute);font-size:.68rem}
.links{display:flex;gap:26px;font-size:.92rem;font-weight:500}
.links a{color:var(--mute);transition:.2s}.links a:hover{color:var(--red)}
.btn{display:inline-block;padding:13px 26px;border-radius:999px;font-weight:700;font-size:.95rem;transition:.2s;border:1.5px solid transparent;cursor:pointer;font-family:inherit}
.btn.red{background:var(--red);color:#fff}.btn.red:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(216,35,42,.35)}
.btn.ghost{border-color:rgba(255,255,255,.35);color:#fff}.btn.ghost:hover{background:rgba(255,255,255,.1)}
.btn.sm{padding:9px 20px;font-size:.85rem}
.hero{background:linear-gradient(135deg,var(--ink),var(--ink2));color:#fff;position:relative;overflow:hidden}
.hero:before{content:"";position:absolute;right:-120px;top:-120px;width:520px;height:520px;border-radius:50%;background:var(--red);opacity:.9}
.hero .wrap{position:relative;display:grid;grid-template-columns:1.2fr .8fr;gap:56px;padding-top:90px;padding-bottom:100px;align-items:center}
.eyebrow{font-size:.82rem;letter-spacing:.18em;color:var(--gold);font-weight:700;text-transform:uppercase}
.hero h1{font-size:clamp(2.2rem,5vw,3.7rem);margin:14px 0 20px;font-weight:800}
.hero p{color:#cbd5e6;max-width:520px;font-size:1.05rem}
.cta{display:flex;gap:12px;flex-wrap:wrap;margin-top:32px}
.form-card{background:var(--card);color:var(--text);padding:30px;border-radius:20px;box-shadow:0 25px 60px rgba(0,0,0,.3)}
.form-card h3{font-size:1.3rem;margin-bottom:4px}.form-card .lic2{font-size:.78rem;color:var(--mute);margin-bottom:16px}
input,select,textarea{width:100%;padding:12px 14px;border:1px solid var(--line);border-radius:10px;font:inherit;background:var(--paper);color:var(--text);margin-bottom:12px}
input:focus,select:focus,textarea:focus{outline:2px solid var(--red);outline-offset:1px}
.form-card .btn{width:100%}
section{padding:96px 0}
.head{max-width:620px;margin-bottom:48px}
.head .jp{color:var(--red);font-weight:700;font-size:.85rem;letter-spacing:.12em}
.head h2{font-size:clamp(1.8rem,3.4vw,2.6rem);margin:8px 0 12px}
.head p{color:var(--mute)}
.about{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.about p{color:var(--mute);margin-bottom:16px}
.pill{display:inline-block;background:var(--card);border:1px solid var(--line);border-radius:999px;padding:8px 16px;font-size:.85rem;margin:0 8px 8px 0}
.pill:before{content:"●";color:var(--red);margin-right:8px;font-size:.6rem}
.steps{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.step{background:var(--card);border:1px solid var(--line);border-radius:20px;padding:34px;position:relative;box-shadow:var(--shadow);transition:.25s}
.step:hover{transform:translateY(-6px)}
.step .n{font-family:'Shippori Mincho',serif;font-size:3.4rem;font-weight:800;color:var(--red);opacity:.2;line-height:1}
.step h3{font-size:1.4rem;margin:6px 0 10px;letter-spacing:.06em}
.step p{color:var(--mute);font-size:.95rem}
.dark{background:var(--ink);color:#fff}
.dark .head p{color:#a9b6cb}.dark .jp{color:var(--gold)}
.grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.svc{padding:30px;border:1px solid rgba(255,255,255,.12);border-radius:18px;background:rgba(255,255,255,.04);transition:.25s}
.svc:hover{background:rgba(255,255,255,.09);border-color:var(--gold)}
.svc i{display:grid;place-items:center;width:46px;height:46px;border-radius:12px;background:var(--red);font-style:normal;font-family:'Shippori Mincho',serif;font-weight:800;margin-bottom:18px}
.svc h3{font-size:1.2rem;margin-bottom:8px}.svc p{color:#a9b6cb;font-size:.93rem}
.why{display:grid;grid-template-columns:repeat(3,1fr);gap:0;border-top:1px solid var(--line)}
.why div{padding:32px 28px 8px 0;border-right:1px solid var(--line);padding-left:28px}
.why div:first-child{padding-left:0}.why div:last-child{border:0}
.why h3{font-size:1.2rem;margin-bottom:8px}.why p{color:var(--mute);font-size:.93rem}
.train{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.tcard{background:var(--card);border:1px solid var(--line);border-left:4px solid var(--red);border-radius:16px;padding:32px;box-shadow:var(--shadow)}
.tcard small{color:var(--red);font-weight:700;letter-spacing:.1em}
.tcard h3{font-size:1.35rem;margin:6px 0 10px}.tcard p{color:var(--mute);font-size:.95rem}
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(255,255,255,.14);border-radius:18px;overflow:hidden}
.stat{background:var(--ink);padding:34px 24px;text-align:center}
.stat b{display:block;font-family:'Shippori Mincho',serif;font-size:2.6rem;color:var(--gold);line-height:1.1}
.stat span{font-size:.85rem;color:#a9b6cb}
.quote{max-width:760px;margin:0 auto;text-align:center}
.quote blockquote{font-family:'Shippori Mincho',serif;font-size:clamp(1.3rem,2.6vw,1.9rem);line-height:1.5}
.quote blockquote:before{content:"“";display:block;font-size:4rem;color:var(--red);line-height:.6}
.who{display:flex;align-items:center;justify-content:center;gap:12px;margin-top:26px;text-align:left}
.av{width:46px;height:46px;border-radius:50%;background:var(--ink2);color:#fff;display:grid;place-items:center;font-weight:700}
.who small{color:var(--mute);display:block}
.banner{background:var(--red);color:#fff;border-radius:28px;padding:56px;display:flex;justify-content:space-between;align-items:center;gap:28px;flex-wrap:wrap}
.banner h2{font-size:clamp(1.6rem,3vw,2.3rem);max-width:520px}.banner p{opacity:.9;margin-top:8px;max-width:520px}
.banner .btn{background:#fff;color:var(--red);margin:4px}
.contact{display:grid;grid-template-columns:.9fr 1.1fr;gap:48px}
.info{background:var(--card);border:1px solid var(--line);border-radius:20px;padding:32px;box-shadow:var(--shadow)}
.info h3{margin-bottom:18px}.info dt{font-size:.75rem;letter-spacing:.1em;color:var(--red);font-weight:700;text-transform:uppercase;margin-top:16px}
.info dd{margin:2px 0 0}
.info .lic3{margin-top:24px;padding-top:18px;border-top:1px dashed var(--line);font-size:.85rem;color:var(--mute)}
.contact form{background:var(--card);border:1px solid var(--line);border-radius:20px;padding:32px;box-shadow:var(--shadow)}
.row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
label{font-size:.82rem;font-weight:700;display:block;margin-bottom:5px}
footer{background:var(--ink);color:#a9b6cb;padding:64px 0 24px;font-size:.9rem}
.fgrid{display:grid;grid-template-columns:1.6fr 1fr 1fr 1fr;gap:40px}
footer h4{color:#fff;margin-bottom:14px;font-size:.95rem}
footer li{list-style:none;margin-bottom:8px}footer ul{padding:0}footer a:hover{color:var(--gold)}
.copy{border-top:1px solid rgba(255,255,255,.12);margin-top:40px;padding-top:20px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:8px;font-size:.8rem}
.reveal{opacity:0;transform:translateY(24px);transition:.7s}.reveal.in{opacity:1;transform:none}
@media(max-width:900px){.links{display:none}.hero .wrap,.about,.contact{grid-template-columns:1fr}.steps,.grid3,.why,.train,.fgrid{grid-template-columns:1fr}.stats{grid-template-columns:1fr 1fr}.why div{border:0;padding-left:0;border-bottom:1px solid var(--line);padding-bottom:20px}.hero:before{width:300px;height:300px}.banner{padding:36px 28px}.row{grid-template-columns:1fr}section{padding:64px 0}}
@media(prefers-reduced-motion:reduce){.reveal{transition:none;opacity:1;transform:none}html{scroll-behavior:auto}}

.hero{padding-bottom:0}.hero .wrap{padding-bottom:170px}
.hero h1 em{font-style:normal;color:var(--gold);font-weight:700}
.greet{display:inline-flex;align-items:center;gap:14px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);padding:8px 20px;border-radius:999px;margin-bottom:22px;font-size:1.05rem}
.greet .ne{font-family:'Noto Sans Devanagari',sans-serif;font-weight:700}.greet .arrow{color:var(--gold)}
.ne2{font-family:'Noto Sans Devanagari','Noto Sans JP',sans-serif;color:#fff!important;font-size:1.15rem!important;font-weight:500;margin-bottom:10px}
.scene{position:absolute;left:0;bottom:-1px;width:100%;height:150px;pointer-events:none}
.route{margin-top:-12px;padding:0 0 30px}
.route .wrap{display:flex;align-items:center;gap:18px}
.route svg{flex:1;height:60px;overflow:visible}
.pt{text-align:left}.pt.r{text-align:right}.pt b{display:block;font-family:'Shippori Mincho',serif;font-size:2rem;color:var(--red);line-height:1}.pt span{font-size:.8rem;color:var(--mute)}
.ticker{background:var(--red);color:#fff;overflow:hidden;white-space:nowrap;padding:14px 0;font-weight:700;letter-spacing:.12em;font-size:.85rem}
.ticker div{display:inline-flex;gap:42px;animation:tk 30s linear infinite;padding-left:42px}
.ticker span:after{content:"✦";margin-left:42px;opacity:.6}
@keyframes tk{to{transform:translateX(-50%)}}
.hero h1{font-size:clamp(2.4rem,5.4vw,4.2rem)}
section:first-of-type{padding-top:80px}
@media(max-width:900px){.hero .wrap{padding-bottom:120px}.scene{height:90px}.route svg{display:none}.route .wrap{justify-content:space-between}}
@media(prefers-reduced-motion:reduce){.ticker div{animation:none}}
@media(prefers-color-scheme:dark){.brand b,.brand b span{color:#fff!important}.brand b span{color:var(--gold)!important}}
.whatsapp-float{position:fixed;right:24px;bottom:24px;width:56px;height:56px;border-radius:50%;background:#25d366;color:#fff;display:grid;place-items:center;font-size:1.6rem;box-shadow:0 10px 30px rgba(0,0,0,.25);z-index:30;transition:.2s}
.whatsapp-float:hover{transform:translateY(-3px)}
</style>
</head>
<body>
    <x-header />

<header class="hero" id="top"><div class="wrap">
<div>
<div class="greet"><span class="ne">नमस्ते</span><span class="arrow">✈</span><span>こんにちは</span></div>
<div class="eyebrow">信頼と実績のネパール人財拠点</div>
<h1>Nepal <em>to</em> Japan.<br>Your career takes off here.</h1>
<p class="ne2">नेपालदेखि जापानसम्म — तालिम, भाषा र रोजगारी एकै ठाउँमा।</p>
<p>Japanese language education, professional skills and ethical recruitment for SSW and TITP, licensed in Nepal, built for Japan.</p>
<div class="cta"><a class="btn red" href="#services">Explore Our Programs</a><a class="btn ghost" href="{{ url('/apply-now') }}">Apply Now</a></div>
</div>
<div class="form-card">
<h3>Start your Japan journey</h3>
<div class="lic2">Free counseling · License No: 221/082/083</div>
<form onsubmit="event.preventDefault();this.querySelector('button').textContent='Thank you – we will contact you!'">
<select aria-label="Select program"><option>Select Program</option><option>Japanese Language School</option><option>SSW Program (特定技能)</option><option>TITP Program (技能実習)</option></select>
<input type="text" placeholder="Full name" aria-label="Full name" required>
<input type="tel" placeholder="Phone number" aria-label="Phone number" required>
<button class="btn red" type="submit">Get Free Counseling</button>
</form></div>
</div>
<svg class="scene" viewBox="0 0 1200 220" preserveAspectRatio="none" aria-hidden="true">
<path d="M0 220V150l90-70 70 50 100-90 110 110 60-40 90 70 80-50V220z" fill="#1c4a8a" opacity=".55"/>
<path d="M0 220V175l130-60 90 60 80-40 110 55 40-20V220z" fill="#0b1f3a" opacity=".7"/>
<path d="M690 220L880 40h40l190 180z" fill="#274d86" opacity=".7"/><path d="M880 40h40l22 24-20 10-22-14-20 14-22-10z" fill="#fff" opacity=".85"/>
<path d="M0 220V200l200-25 220 30 260-20 240 22 280-25V220z" fill="#faf8f4"/>
</svg>
</header>
<div class="route"><div class="wrap">
<div class="pt"><b>KTM</b><span>Kathmandu · नेपाल</span></div>
<svg viewBox="0 0 600 60" preserveAspectRatio="none" aria-hidden="true"><path id="fp" d="M4 50Q300-40 596 50" fill="none" stroke="var(--red)" stroke-width="2.5" stroke-dasharray="3 9" stroke-linecap="round"/><text font-size="22"><textPath href="#fp" startOffset="0%">✈<animate attributeName="startOffset" from="0%" to="94%" dur="5s" repeatCount="indefinite"/></textPath></text></svg>
<div class="pt r"><b>TYO</b><span>Tokyo · 日本</span></div>
</div></div>
<div class="ticker" aria-hidden="true"><div>
<span>LEARN 学ぶ</span><span>TRAIN 訓練</span><span>DEPLOY 派遣</span><span>SUCCEED 成功</span><span>सिक्नुहोस्</span><span>JLPT N5–N1</span><span>SSW 特定技能</span><span>TITP 技能実習</span>
<span>LEARN 学ぶ</span><span>TRAIN 訓練</span><span>DEPLOY 派遣</span><span>SUCCEED 成功</span><span>सिक्नुहोस्</span><span>JLPT N5–N1</span><span>SSW 特定技能</span><span>TITP 技能実習</span>
</div></div>

<section id="about"><div class="wrap about">
<div class="head" style="margin:0"><div class="jp">会社概要</div><h2>Welcome to Kaure Ocean</h2>
<p>Kaure Ocean Educational &amp; Consultancy Pvt. Ltd. (Kaure Ocean Japanese Language School) is based in Samakhusi, Kathmandu, Nepal. The organization focuses on Japanese language education, Japanese cultural training, SSW and TITP recruitment support, and visa application consultancy.</p>
<p>We are committed to transforming lives by connecting talented individuals with meaningful opportunities in Japan, upholding dignity, fairness, and professional excellence.</p>
<a class="btn red sm" href="{{ url('/about-us') }}">Read More About Us</a> &nbsp; <a href="{{ url('/mission-vision') }}" style="font-weight:700;color:var(--red)">Mission &amp; Vision →</a></div>
<div class="reveal"><span class="pill">Japanese language school</span><span class="pill">Cultural training</span><span class="pill">SSW recruitment</span><span class="pill">TITP recruitment</span><span class="pill">Visa consultancy</span><span class="pill">Based in Samakhusi, Kathmandu</span></div>
</div></section>

<section id="approach" style="padding-top:0"><div class="wrap">
<div class="head"><div class="jp">私たちのアプローチ</div><h2>Our Approach</h2><p>A structured 3-step pathway designed to ensure professional success in Japan.</p></div>
<div class="steps">
<div class="step reveal"><div class="n">01</div><h3>TRAIN</h3><p>Japanese language skills, cultural orientation, workplace safety, and professional technical training.</p></div>
<div class="step reveal"><div class="n">02</div><h3>DEPLOY</h3><p>Support for appropriate employment, visa processing, and ethical recruitment opportunities.</p></div>
<div class="step reveal"><div class="n">03</div><h3>SUPPORT</h3><p>Ongoing guidance, documentation assistance, and candidate welfare support throughout your career.</p></div>
</div></div></section>

<section class="dark" id="services"><div class="wrap">
<div class="head"><div class="jp">サービス案内</div><h2>Our Services</h2><p>Comprehensive education and recruitment solutions under one roof.</p></div>
<div class="grid3">
@php
    $dbServices = \App\Models\Service::where('is_active', true)->get();
@endphp
@if($dbServices->count() > 0)
    @foreach($dbServices as $service)
        <div class="svc reveal"><i>{{ mb_substr($service->title, 0, 1) }}</i><h3>{{ $service->title }}</h3><p>{{ $service->description }}</p></div>
    @endforeach
@else
    <div class="svc reveal"><i>日</i><h3>Japanese Language Education</h3><p>Comprehensive language training from N5 to N1 levels to ensure confident workplace communication.</p></div>
    <div class="svc reveal"><i>文</i><h3>Japanese Cultural Training</h3><p>Educating candidates about Japanese traditions, business etiquette, and lifestyle adaptation.</p></div>
    <div class="svc reveal"><i>職</i><h3>SSW Recruitment Support</h3><p>Specified Skilled Worker program facilitation across certified industrial sectors in Japan.</p></div>
@endif
</div></div></section>

<section><div class="wrap">
<div class="head"><div class="jp">当社を選ぶべき理由</div><h2>Why Choose Kaure Ocean?</h2><p>Setting benchmarks in transparent counseling and professional preparation.</p></div>
<div class="why">
<div><h3>Japanese-Focused Education</h3><p>Specialized curriculum tailored specifically for living and working successfully in Japan.</p></div>
<div><h3>Fair &amp; Responsible Recruitment</h3><p>Commitment to ethical recruitment practices, transparency, and candidate dignity.</p></div>
<div><h3>Japan-Related Experience</h3><p>Leadership and trainers with firsthand study and work experience in Japan.</p></div>
</div></div></section>

<section id="training" style="padding-top:0"><div class="wrap">
<div class="head"><div class="jp">教育分野</div><h2>Our Training Areas</h2><p>Quality training builds confidence, enhances skills, and prepares candidates to succeed abroad.</p></div>
<div class="train">
<div class="tcard"><small>日本語教育</small><h3>Japanese Language Training</h3><p>Comprehensive Japanese language training (Listening, Speaking, Reading &amp; Writing) to help candidates communicate confidently in the workplace and daily life in Japan.</p></div>
<div class="tcard"><small>技術スキル開発</small><h3>Skill Development (Technical Training)</h3><p>Job-specific technical training and practical sessions to enhance candidates' skills and meet employer requirements in their respective industries.</p></div>
</div>
<p style="margin-top:28px"><a class="btn red sm" href="{{ url('/training') }}">View All Training Programs</a></p>
</div></section>

<section class="dark"><div class="wrap">
<div class="head"><div class="jp">実績と信頼</div><h2>Our Impact in Numbers</h2></div>
<div class="stats">
@php
    $statistics = \App\Models\Statistic::where('is_active', true)->get();
@endphp
@if($statistics->count() > 0)
    @foreach($statistics as $stat)
        <div class="stat"><b>{{ $stat->metric_value }}</b><span>{{ $stat->label }}</span></div>
    @endforeach
@else
    <div class="stat"><b>1000+</b><span>Candidates Trained Successfully</span></div>
    <div class="stat"><b>90%+</b><span>Success Rate in Job Placement</span></div>
    <div class="stat"><b>100%</b><span>Pre-Departure Training</span></div>
    <div class="stat"><b>5+</b><span>Countries Served</span></div>
    <div class="stat"><b>5000+</b><span>Candidates Employed</span></div>
    <div class="stat"><b>100+</b><span>Trusted Clients Worldwide</span></div>
    <div class="stat"><b>95%+</b><span>Client Satisfaction</span></div>
    <div class="stat"><b>221/082/083</b><span>Licensed · Dept. of Foreign Employment</span></div>
@endif
</div></div></section>

<section><div class="wrap">
<div class="head" style="margin:0 auto 40px;text-align:center"><div class="jp">受講生の声</div><h2>Candidate Testimonials</h2><p>Hear from our successful students and professionals placed in Japan.</p></div>
@php
    $testimonials = \App\Models\Testimonial::latest()->take(3)->get();
@endphp
@if($testimonials->count() > 0)
    @foreach($testimonials as $testi)
        <div class="quote reveal" style="margin-bottom:40px"><blockquote>{{ $testi->quote }}</blockquote>
        <div class="who"><div class="av">{{ mb_substr($testi->candidate_name, 0, 1) }}</div><div><b>{{ $testi->candidate_name }}</b><small>{{ $testi->program }} · {{ $testi->destination }}</small></div></div></div>
    @endforeach
@else
    <div class="quote reveal"><blockquote>Kaure Ocean's rigorous language training and interview preparation made my dream of working in Japan a reality.</blockquote>
    <div class="who"><div class="av">R</div><div><b>Rajan Shrestha</b><small>SSW Caregiving · Tokyo, Japan</small></div></div></div>
@endif
</div></section>

<section style="padding-top:0"><div class="wrap"><div class="banner">
<div><h2>Ready to Start Your Journey to Japan?</h2><p>Connect with Kaure Ocean today for expert counseling, professional training, and trusted recruitment support.</p></div>
<div><a class="btn" href="{{ url('/contact-us') }}">Book Consultation</a><a class="btn" href="https://line.me/" target="_blank" rel="noopener">LINEでお問い合わせ</a></div>
</div></div></section>

<section id="contact" style="padding-top:0"><div class="wrap">
<div class="head"><div class="jp">お問い合わせ</div><h2>Contact Us</h2><p>We are here to help you find the right opportunity. Get in touch with our team today!</p></div>
<div class="contact">
<div class="info"><h3>Kaure Ocean Headquarters</h3>
<dl><dt>Address</dt><dd>Kathmandu-26, Samakhusi, Ranibari Marga, Nepal</dd>
<dt>Phone</dt><dd>01-5923201</dd><dt>Email</dt><dd>kaureocean7@gmail.com</dd><dt>Office Hours</dt><dd>9:00 AM – 5:30 PM (Nepal Time)</dd></dl>
<div class="lic3"><b>ライセンス番号：221/082/083</b><br>ネパール政府 労働・雇用・社会保障省 海外雇用局 カトマンズ</div></div>
<form onsubmit="event.preventDefault();this.querySelector('button').textContent='Enquiry sent – thank you!'">
<h3 style="margin-bottom:4px">Get in Touch / Enquire Now</h3><p style="color:var(--mute);font-size:.9rem;margin-bottom:18px">Our friendly team is ready to answer your questions and guide your career to Japan.</p>
<div class="row"><div><label for="n">Full Name</label><input id="n" required></div><div><label for="p">Phone Number</label><input id="p" type="tel"></div></div>
<label for="e">Email Address</label><input id="e" type="email" required>
<label for="s">Interested Program / Service</label>
<select id="s"><option>Select Program</option><option>Japanese Language School</option><option>Specified Skilled Worker (SSW)</option><option>Technical Intern Training Program (TITP)</option><option>Technical Skill Development</option></select>
<label for="m">Your Message or Query</label><textarea id="m" rows="4"></textarea>
<button class="btn red" type="submit">Submit Enquiry</button></form>
</div></div></section>

<footer><div class="wrap">
<div class="fgrid">
<div><h4 style="font-family:'Shippori Mincho',serif;font-size:1.2rem">KAURE OCEAN</h4><p>Kaure Ocean Educational &amp; Consultancy Pvt. Ltd. (Kaure Ocean Japanese Language School) is dedicated to providing world-class Japanese language education, technical training, and ethical recruitment for SSW and TITP programs.</p><p style="margin-top:12px;color:var(--gold)">ライセンス番号：221/082/083</p></div>
<div><h4>Quick Links</h4><ul><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ url('/about-us') }}">About Us</a></li><li><a href="{{ url('/mission-vision') }}">Mission &amp; Vision</a></li><li><a href="{{ url('/leadership') }}">Leadership</a></li><li><a href="{{ url('/our-team') }}">Our Team</a></li></ul></div>
<div><h4>Programs &amp; Services</h4><ul><li><a href="{{ url('/japanese-language') }}">Japanese Language</a></li><li><a href="{{ url('/jlpt-preparation') }}">JLPT Preparation</a></li><li><a href="{{ url('/japan-opportunities/ssw') }}">SSW Program</a></li><li><a href="{{ url('/japan-opportunities/titp') }}">TITP Program</a></li><li><a href="{{ url('/recruitment-process') }}">Recruitment Process</a></li></ul></div>
<div><h4>Legal &amp; Contact</h4><ul><li><a href="{{ url('/contact-us') }}">Contact Us</a></li><li><a href="{{ url('/blog') }}">Blog &amp; News</a></li><li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li><li><a href="{{ url('/terms-and-conditions') }}">Terms &amp; Conditions</a></li><li><a href="{{ url('/disclaimer') }}">Disclaimer</a></li></ul></div>
</div>
<div class="copy"><span>© {{ date('Y') }} Kaure Ocean Educational &amp; Consultancy Pvt. Ltd. All rights reserved.</span><span>信頼と実績のネパール人財拠点</span></div>
</div></footer>

<a href="https://api.whatsapp.com/send?phone=97798XXXXXXXX" class="whatsapp-float" target="_blank" rel="noopener" title="Chat on WhatsApp">💬</a>

<script>
try{var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.15});document.querySelectorAll('.reveal').forEach(function(el){io.observe(el)})}catch(e){document.querySelectorAll('.reveal').forEach(function(el){el.classList.add('in')})}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>