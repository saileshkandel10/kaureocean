# Requirements Specification: Kaure Ocean Platform

## 1. Functional Requirements
### 1.1 Public Website
- **Homepage:** Hero section with CTA, About preview, Train-Deploy-Support 4-step workflow, Key stats (draft-verified), Programs overview, Partners, Testimonials, and Contact footer.
- **About Us:** Company profile, CEO message (Prakash Bastola), Vision & Mission, License details (No. 221/082/083).
- **Japanese Language School:** Comprehensive details on language training (Listening, Speaking, Reading, Writing), teaching methodology, and class schedules.
- **SSW & TITP Programs:** Detailed guides on Specified Skilled Worker (SSW) and Technical Intern Training Program (TITP) pathways.
- **Training & Support:** Technical skill development, cultural orientation, workplace safety training, pre-departure orientation.
- **Contact & Consultations:** Office hours (9:00 AM - 5:30 PM Nepal Time), phone (01-5923201), email (kaureocean7@gmail.com), address (Kathmandu-26, Samakhusi, Ranibari Marga), interactive enquiry form, and WhatsApp/LINE integration links.

### 1.2 Administrative CMS & Management System
- **Authentication:** Secure admin login with Role-Based Access Control (RBAC).
- **Content Management:** Admin control over pages, courses, programs, testimonials, partners, and hero banners.
- **Enquiry Management:** View, filter, update status, and respond to candidate enquiries and consultation bookings.
- **Draft Statistical Management:** Admin interface to review, verify, and publish brochure statistics (5000+ employed, 100+ clients, etc.).

## 2. Non-Functional Requirements
- **Performance:** Page load speed under 2 seconds, optimized image assets.
- **Security:** CSRF protection, SQL injection prevention, XSS sanitation, secure password hashing (Bcrypt/Argon2).
- **Responsiveness:** Fully mobile-optimized across smartphones, tablets, and desktops using Bootstrap 5 grid.
- **Maintainability:** Modular Laravel architecture following MVC pattern and PSR coding standards.
