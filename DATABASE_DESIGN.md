# Database Architecture & Data Design: Kaure Ocean Platform

## 1. Schema Overview
Designed for scalability, auditability, candidate lifecycle tracking, and dynamic content management.

### Modules & Tables

#### 1. User & Access Management
- `roles`: `id`, `name`, `slug`, `description`, timestamps.
- `permissions`: `id`, `name`, `slug`, `description`, timestamps.
- `role_user`: `id`, `role_id` (FK), `user_id` (FK), timestamps.
- `permission_role`: `id`, `permission_id` (FK), `role_id` (FK), timestamps.
- `users`: `id`, `name`, `email`, `role`, `password`, timestamps.

#### 2. Website Settings & CMS
- `settings`: `id`, `key` (unique), `value`, `group`, timestamps.
- `menus` & `menu_items`: Hierarchical navigation structure with `parent_id` foreign key.
- `pages` & `page_sections`: Dynamic static pages and multi-section layouts with soft deletes.
- `banners`: Hero slide items with call-to-action links and active state.
- `statistics`: Draft-verified metrics (`metric_key`, `metric_value`, `label`, `is_verified`, `is_active`).
- `social_links`: Social media URLs, icons, and status flags.

#### 3. Company Content
- `company_profiles`: Official name, license number (221/082/083), contact numbers, email, headquarters address, office hours, mission, and vision.
- `team_members`: Staff names, designations, photos, bios, social profiles, and display order.
- `leadership_profiles`: Managing director/CEO details, executive message, and photo.
- `services`: Service cards, icons, descriptions, and slugs.
- `testimonials`: Candidate testimonials, verification status, and destinations.
- `partners`: Partner names, logos, and website URLs.
- `galleries` & `gallery_categories`: Image/video categorized assets with responsive attributes.
- `faqs`: Categorized questions and answers with ordering.

#### 4. Education & Training
- `course_categories`, `courses`, `course_modules`: JLPT proficiency courses (N5-N1), durations, fees, and curricula.
- `training_categories`, `training_programs`, `training_schedules`, `trainers`, `training_enrollments`: Technical training, cultural orientation, workplace safety, schedule batches, and enrollments.

#### 5. Japan Programs (SSW & TITP)
- `program_categories`: SSW, TITP, and custom categories.
- `programs`: Detailed guides, overview, and eligibility.
- `program_requirements`: Sector-specific criteria.
- `program_documents`: Required submission documentation checklist.
- `program_faqs`: Program-specific questions.

#### 6. Candidate CRM
- `candidates`: Core candidate records with status (`new`, `in_training`, `interview_ready`, `visa_processing`, `deployed`), soft deletes.
- `candidate_applications`: Specific program applications.
- `candidate_educations` & `candidate_experiences`: Academic and employment history.
- `candidate_notes`: Internal counselor notes with author user ID.
- `candidate_activities`: Timeline audit of candidate milestones.
- `candidate_assignments`: Assigned counselor mapping.
- `candidate_status_histories`: Status transition audit log.
- `candidate_documents`: Private document storage paths and document categories.
- `follow_ups`: Scheduled consultation calls, reminders, and outcome remarks.

#### 7. Content Management (Blog & Media)
- `blog_categories`, `blog_posts`, `blog_tags`, `blog_post_tag`: News, SSW guidelines, slug-based articles with author relationships and soft deletes.
- `media`: Centralized media library asset tracking.

#### 8. Communication & System Infrastructure
- `contact_messages`: Public enquiry submissions.
- `subscribers`: Email newsletter subscribers.
- `notifications`: Multi-channel notification queue.
- `email_templates`: Customizable automated email notifications.
- `activity_logs`: Administrative actions log.
- `audit_logs`: Entity change tracking.
