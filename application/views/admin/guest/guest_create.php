<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Guest</h4>
            </div>
            <div class="card-body">
                <div class="p-4">
                    <!-- Tampilkan pesan error atau success -->
                    <?php if (!empty($error)) {
                        echo $error;
                    } ?>
                    <?php if (!empty($success)) {
                        echo $success;
                    } ?>

                    <form method="post" action="<?php echo site_url('guest/store'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <!-- Reservation from user -->
                        <div class="mb-3">
                            <label class="form-label" for="reservation">Reservation (Opsional)</label>
                            <select class="form-control" id="reservationSelect" name="reservation_id" required>
                                <option value="">Select Guest</option>
                                <?php foreach ($reservations as $reservation): ?>
                                    <option value="<?php echo $reservation->reservation_id; ?>">
                                        <?php echo $reservation->name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?php echo set_value('name'); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                value="<?php echo set_value('phone_number'); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="<?php echo set_value('address'); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="<?php echo set_value('city'); ?>">
                        </div>


                        <!-- Identity Type -->
                        <div class="mb-3">
                            <label class="form-label" for="identity_type">Identity Type</label>
                            <select class="form-control" name="identity_type">
                                <option value="">Choose</option>
                                <option value="KTP" <?php echo set_select('identity_type', 'KTP'); ?>>KTP</option>
                                <option value="SIM" <?php echo set_select('identity_type', 'SIM'); ?>>SIM</option>
                                <option value="Passport" <?php echo set_select('identity_type', 'Passport'); ?>>Passport
                                </option>
                            </select>
                        </div>

                        <!-- Identity Number -->
                        <div class="mb-3">
                            <label class="form-label" for="identity_number">Identity Number</label>
                            <input type="text" class="form-control" name="identity_number"
                                value="<?php echo set_value('identity_number'); ?>">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo site_url('guest/index'); ?>" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>