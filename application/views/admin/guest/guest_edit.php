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
                    <form action="<?php echo site_url('guest/update/' . $guest->guest_id); ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                                value="<?php echo set_value('name', $guest->name); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number"
                                value="<?php echo set_value('phone_number', $guest->phone_number); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address"
                                value="<?php echo set_value('address', $guest->address); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city"
                                value="<?php echo set_value('city', $guest->city); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="identity_type">Identity Type</label>
                            <select class="form-control" name="identity_type" required>
                                <option value="">Select Identity Type</option>
                                <option value="KTP" <?php echo set_select('identity_type', 'KTP', ($guest->identity_type == 'KTP')); ?>>KTP</option>
                                <option value="Passport" <?php echo set_select('identity_type', 'Passport', ($guest->identity_type == 'Passport')); ?>>Passport</option>
                                <option value="SIM" <?php echo set_select('identity_type', 'SIM', ($guest->identity_type == 'SIM')); ?>>SIM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="identity_number">Identity Number</label>
                            <input type="text" class="form-control" name="identity_number"
                                value="<?php echo set_value('identity_number', $guest->identity_number); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo site_url('guest/index'); ?>" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>