<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Check-Out</h4>
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
                    <form method="post"
                        action="<?php echo site_url('guestcheckin/update_checkout/' . $checkin->check_id); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="mb-3">
                            <label for="checkout_date">Check-Out Date</label>
                            <input type="datetime-local" class="form-control" name="checkout_date"
                                value="<?php echo !empty($checkin->checkout_date) ? date('Y-m-d\TH:i', strtotime($checkin->checkout_date)) : date('Y-m-d\TH:i'); ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="duration">Duration (days)</label>
                            <?php
                            // Hitung durasi hanya jika checkout_date dan checkin_date tersedia
                            $duration = !empty($checkin->checkout_date) && !empty($checkin->checkin_date)
                                ? max(1, (strtotime($checkin->checkout_date) - strtotime($checkin->checkin_date)) / (60 * 60 * 24))
                                : 1;
                            ?>
                            <input type="number" class="form-control" name="duration" value="<?php echo $duration; ?>"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label for="price_per_night">Price per Night</label>
                            <input type="text" class="form-control" name="price_per_night"
                                value="Rp <?php echo number_format($checkin->price, 0, ',', '.'); ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="total_price">Total Price</label>
                            <?php
                            // Hitung total harga
                            $total_price = $duration * $checkin->price;
                            ?>
                            <input type="text" class="form-control" name="total_price"
                                value="Rp <?php echo number_format($total_price, 0, ',', '.'); ?>" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Check Out</button>
                        <a href="<?php echo site_url('guestcheckin'); ?>" class="btn btn-secondary">Cancel</a>
                    </form>

                    

                </div>
            </div>
        </div>
    </div>
</div>