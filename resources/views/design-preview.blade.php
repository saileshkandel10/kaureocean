<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaure Ocean - Design System Preview</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Kaure Design System CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
</head>
<body>

    <!-- Header Component -->
    <x-header />

    <!-- Breadcrumbs Component -->
    <x-breadcrumbs :items="['Design System Preview' => '#']" />

    <!-- Page Banner Component -->
    <x-page-banner 
        title="Kaure Ocean Design System Preview" 
        subtitle="Comprehensive UI components, color palette, typography, and layout guidelines inspired by top educational consultancy standards." 
        jpTitle="カウレオーシャン デザインシステム" 
    />

    <main class="py-5">
        <div class="container">
            
            <!-- Alert Messages Component -->
            <div class="mb-5">
                <x-alert-messages />
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <i class="fas fa-check-circle me-2"></i> This is a sample success alert message demonstrating design system styles.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <!-- Typography & Colors Section -->
            <section class="mb-5">
                <x-section-heading title="Branding & Typography" subtitle="Official color palette and heading hierarchy." jpTitle="ブランディングとタイポグラフィ" />
                <div class="row g-4 mb-4">
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-white fw-bold shadow-sm" style="background-color: var(--kaure-navy);">Navy<br>#203070</div>
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-white fw-bold shadow-sm" style="background-color: var(--kaure-dark-navy);">Dark Navy<br>#172B60</div>
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-white fw-bold shadow-sm" style="background-color: var(--kaure-orange);">Orange<br>#E05020</div>
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-dark fw-bold shadow-sm border" style="background-color: var(--kaure-cream);">Cream<br>#F5F1E8</div>
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-dark fw-bold shadow-sm border" style="background-color: var(--kaure-white);">White<br>#FFFFFF</div>
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <div class="p-4 rounded text-white fw-bold shadow-sm" style="background-color: var(--kaure-text);">Text Dark<br>#222222</div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="kaure-card">
                            <h1>Heading 1 (Poppins)</h1>
                            <h2>Heading 2 (Poppins)</h2>
                            <h3>Heading 3 (Poppins)</h3>
                            <h4>Heading 4 (Poppins)</h4>
                            <p class="mt-3">Body text using Poppins font family. Designed for maximum legibility and professional aesthetic across desktop, tablet, and mobile devices.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kaure-card kaure-card-cream">
                            <h3 class="h4 font-jp mb-3">日本語タイポグラフィ (Noto Sans JP)</h3>
                            <p class="font-jp fs-5 mb-2">カウレ オーシャン 日本語学校</p>
                            <p class="font-jp text-muted small">日本での就労や進学を希望する学生や専門家に対し、包括的な教育サービスを提供しています。特定技能(SSW)および技能実習(TITP)の送り出し支援。</p>
                            <div class="mt-3 d-flex gap-2">
                                <x-primary-button href="#contact">Primary Button</x-primary-button>
                                <x-secondary-button href="#contact">Secondary Button</x-secondary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Cards Section -->
            <section class="mb-5">
                <x-section-heading title="Service Cards" subtitle="Core offerings and consulting areas." jpTitle="サービス一覧" />
                <div class="row g-4">
                    <div class="col-md-4">
                        <x-service-card 
                            title="Japanese Language Education" 
                            description="Comprehensive training from N5 to N1 levels with expert native and bilingual instructors." 
                            icon="fas fa-language" 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-service-card 
                            title="SSW Program Support" 
                            description="Facilitating Specified Skilled Worker placements across diverse industrial sectors in Japan." 
                            icon="fas fa-briefcase" 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-service-card 
                            title="TITP Training & Guidance" 
                            description="Technical Intern Training Program preparation ensuring compliance and workplace success." 
                            icon="fas fa-hands-helping" 
                        />
                    </div>
                </div>
            </section>

            <!-- Course Cards Section -->
            <section class="mb-5">
                <x-section-heading title="Course Cards" subtitle="Language proficiency levels and schedules." jpTitle="日本語コース" />
                <div class="row g-4">
                    <div class="col-md-4">
                        <x-course-card 
                            title="Beginner Japanese (N5 & N4)" 
                            level="JLPT N5 - N4" 
                            duration="6 Months" 
                            description="Foundational grammar, vocabulary, listening, and conversational fluency for everyday life in Japan." 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-course-card 
                            title="Intermediate Japanese (N3)" 
                            level="JLPT N3" 
                            duration="4 Months" 
                            description="Advanced conversational skills and technical workplace communication required for SSW candidates." 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-course-card 
                            title="SSW Skill Test Preparation" 
                            level="SSW Specific" 
                            duration="2 Months" 
                            description="Industry-specific terminology, practical assessments, and mock examinations for professional placement." 
                        />
                    </div>
                </div>
            </section>

            <!-- Training Cards Section -->
            <section class="mb-5">
                <x-section-heading title="Training Methodology Cards" subtitle="Multi-dimensional candidate preparation." jpTitle="教育方針" />
                <div class="row g-4">
                    <div class="col-md-6">
                        <x-training-card 
                            title="Cultural Orientation" 
                            jpTitle="日本文化研修" 
                            description="Educating candidates about Japanese culture, traditions, work ethics, manners, and lifestyle to ensure smooth adjustment." 
                            icon="fas fa-torii-gate" 
                        />
                    </div>
                    <div class="col-md-6">
                        <x-training-card 
                            title="Workplace Safety Training" 
                            jpTitle="職場安全訓練" 
                            description="Essential safety protocols, hazard awareness, and health standards for industrial and caregiving environments in Japan." 
                            icon="fas fa-hard-hat" 
                        />
                    </div>
                </div>
            </section>

            <!-- Testimonial & Partner Cards Section -->
            <section class="mb-5">
                <x-section-heading title="Testimonials & Partners" subtitle="Success stories and trusted institutional network." jpTitle="受講生の声・パートナー" />
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <x-testimonial-card 
                            name="Rajan Shrestha" 
                            program="SSW Caregiving" 
                            destination="Tokyo, Japan" 
                            quote="Kaure Ocean's rigorous language training and interview preparation made my dream of working in Japan a reality." 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-testimonial-card 
                            name="Sunita Gurung" 
                            program="TITP Agriculture" 
                            destination="Hokkaido, Japan" 
                            quote="The instructors are extremely supportive and professional. The pre-departure orientation gave me total confidence." 
                        />
                    </div>
                    <div class="col-md-4">
                        <x-testimonial-card 
                            name="Bijay Maharjan" 
                            program="SSW Construction" 
                            destination="Osaka, Japan" 
                            quote="Transparent guidance and ethical recruitment. I am grateful to CEO Prakash Bastola and the entire Kaure Ocean team." 
                        />
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-3">
                        <x-partner-card name="Japanese Language Partners" logo="" />
                    </div>
                    <div class="col-md-3">
                        <x-partner-card name="SSW Recruitment Network" logo="" />
                    </div>
                    <div class="col-md-3">
                        <x-partner-card name="TITP Supporting Organizations" logo="" />
                    </div>
                    <div class="col-md-3">
                        <x-partner-card name="Global Placement Hub" logo="" />
                    </div>
                </div>
            </section>

            <!-- Contact Form & Enquiry Section -->
            <section class="mb-5" id="contact">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8">
                        <x-contact-form />
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- Enquiry CTA Component -->
    <x-enquiry-cta />

    <!-- Footer Component -->
    <x-footer />

    <!-- WhatsApp Floating Contact -->
    <x-whatsapp-float />

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
