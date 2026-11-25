<div class="kaure-card shadow-lg border-0">
    <h3 class="h4 fw-bold mb-3" style="color: var(--kaure-navy);">Get in Touch / Enquire Now</h3>
    <p class="small text-muted mb-4">Our friendly team is ready to answer your questions and guide your career to Japan.</p>
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fullName" class="form-label small fw-semibold">Full Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label small fw-semibold">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label small fw-semibold">Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="+977-98XXXXXXXX" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="program" class="form-label small fw-semibold">Interested Program / Service</label>
            <select class="form-select" id="program">
                <option selected>Select Program</option>
                <option value="japanese">Japanese Language School</option>
                <option value="ssw">Specified Skilled Worker (SSW)</option>
                <option value="titp">Technical Intern Training Program (TITP)</option>
                <option value="technical">Technical Skill Development</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label small fw-semibold">Your Message or Query</label>
            <textarea class="form-control" id="message" rows="4" placeholder="How can we help you?"></textarea>
        </div>
        <button type="submit" class="btn btn-kaure-primary w-100 py-2">Submit Enquiry</button>
    </form>
</div>
