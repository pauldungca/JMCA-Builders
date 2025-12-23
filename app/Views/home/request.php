    <?= $this->extend('home/layout') ?>

    <?= $this->section('page_css') ?>
    <link href="<?= base_url('assets/css/request.css') ?>" rel="stylesheet">
    <?= $this->endSection() ?>

    <?= $this->section('content') ?>



    <section class="quotation-section">
    <div class="quotation-container">

        <h1 class="quotation-title">Set of Questions</h1>
        <p class="quotation-subtitle">
        Please provide all the necessary details for the initial quotation
        </p>

        <form class="quotation-form">

        <!-- LEFT COLUMN -->
        <div class="form-left">
            <label>Subject *</label>
            <input type="text" placeholder="Subject">

            <label>Client Name *</label>
            <input type="text" placeholder="Client Name">

            <label>Email *</label>
            <input type="email" placeholder="Email">

            <label>Phone</label>
            <input type="text" placeholder="Phone">

            <label>Location *</label>
            <input type="text" placeholder="Location">

            <label>Estimated Budget *</label>
            <input type="text" placeholder="Estimated Budget">

            <label>Lot Area (Sqm) *</label>
            <input type="text" placeholder="Lot Area (Sqm)">

            <label>Total Floors *</label>
            <input type="number" placeholder="Total Floors">

            <label>Projected Total Floor Area (Sqm)</label>
            <input type="text" placeholder="Projected Total Floor Area (Sqm)">

            <label>Subdivision / Village / Condo Name</label>
            <input type="text" placeholder="Subdivision / Village / Condo Name">

            <label>Kind of Finishes *</label>
            <select>
            <option value="">Select Finish</option>
            <option>Standard</option>
            <option>Mid-End</option>
            <option>High-End</option>
            </select>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="form-right">
            <label>Leave us a message...</label>
            <textarea placeholder="Your message here..."></textarea>
        </div>

        <!-- SUBMIT -->
        <div class="form-submit">
            <button type="submit">SUBMIT</button>
        </div>

        </form>
    </div>
    </section>
    <?= $this->endSection() ?>