<?php
/**
 * Metabox "Behavior"
 *
 * Used in class-popup-admin.php
 * Available variables: $popup
 */

?>
<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'When to show the PopUp:', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12" style="overflow: visible">
	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-delay"
				value="delay"
				data-toggle=".opt-display-delay"
				checked="checked" />
			<?php _e( 'Appear after', PO_LANG ); ?>
		</label>
		<span class="opt-display-delay">
			<input type="number"
				min="0"
				max="999"
				maxlength="3"
				name="po_display_data[delay]"
				class="inp-small"
				value="<?php echo esc_attr( $popup->display_data['delay'] ); ?>"
				placeholder="10" />
			<select name="po_display_data[delay_type]">
				<option value="s" <?php selected( $popup->display_data['delay_type'], 's' ); ?>>
					<?php _e( 'Seconds', PO_LANG ); ?>
				</option>
				<option value="m" <?php selected( $popup->display_data['delay_type'], 'm' ); ?>>
					<?php _e( 'Minutes', PO_LANG ); ?>
				</option>
			</select>
		</span>
	</div>

	<div class="pro-only">
	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-scroll"
				value="scroll"
				data-toggle=".opt-display-scroll"
				readonly="readonly" />
			<?php _e( 'Appear after', PO_LANG ); ?>
		</label>
		<span class="opt-display-scroll">
			<input type="number"
				min="0"
				max="9999"
				maxlength="4"
				readonly="readonly"
				class="inp-small"
				value="<?php echo esc_attr( $popup->display_data['scroll'] ); ?>"
				placeholder="25" />
			<select>
				<option value="%" <?php selected( $popup->display_data['scroll_type'], '%' ); ?>>
					<?php _e( '%', PO_LANG ); ?>
				</option>
				<option value="px" <?php selected( $popup->display_data['scroll_type'], 'px' ); ?>>
					<?php _e( 'px', PO_LANG ); ?>
				</option>
			</select>
		</span>
		<?php _e( 'of the page has been scrolled.', PO_LANG ); ?>
	</div>
	<div class="col-12 inp-row">
		<label>
			<input type="radio"
				name="po_display"
				id="po-display-anchor"
				value="anchor"
				data-toggle=".opt-display-anchor"
				readonly="readonly" />
			<?php _e( 'Appear after user scrolled until CSS selector', PO_LANG ); ?>
		</label>
		<span class="opt-display-anchor">
			<input type="text"
				maxlength="50"
				readonly="readonly"
				value="<?php echo esc_attr( $popup->display_data['anchor'] ); ?>"
				placeholder="<?php _e( '.class or #id', PO_LANG ); ?>" />
		</span>
	</div>
	<?php do_action( 'popup-display-behavior', $popup ); ?>
	<div class="pro-note">
		<div style="padding:30px 0 0;">
		<?php printf(
			__( 'Pro feature only. <a href="%1$s" target="_blank">Find out more &raquo;</a>', PO_LANG ),
			'http://premium.wpmudev.org/project/the-pop-over-plugin/'
		); ?>
		</div>
	</div>
	</div>
</div>

<hr />

<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( '"Never see this message again" settings:', PO_LANG ); ?></strong>
	</div>
</div>
<div class="wpmui-grid-12">
	<div class="col-12 inp-row">
		<label>
			<input type="checkbox"
				name="po_can_hide"
				id="po-can-hide"
				data-toggle=".chk-can-hide"
				data-or="#po-can-hide,#po-close-hides"
				<?php checked( $popup->can_hide ); ?>/>
			<?php _e( 'Add "Never see this message again" link', PO_LANG ); ?>
		</label>
	</div>
	<div class="pro-only">
	<div class="col-12 inp-row">
		<label>
			<input type="checkbox"
				readonly="readonly"
				id="po-close-hides"
				data-toggle=".chk-can-hide"
				data-or="#po-can-hide,#po-close-hides"
				/>
			<?php _e( 'Close button acts as "Never see this message again" link', PO_LANG ); ?>
		</label>
	</div>
	<div class="col-12 inp-row chk-can-hide">
		<label for="po-hide-expire">
			<?php _e( 'Expiry time', PO_LANG ); ?>
			<input type="number"
				readonly="readonly"
				id="po-hide-expire"
				class="inp-small"
				value="<?php echo esc_attr( $popup->hide_expire ); ?>"
				placeholder="365" />
			<?php _e( 'days', PO_LANG ); ?>
			<?php _e( '(upon expiry, user will see this PopUp again)', PO_LANG ); ?>
		</label>
	</div>
	<div class="pro-note">
		<div style="padding:30px 0 0;">
		<?php printf(
			__( 'Pro feature only. <a href="%1$s" target="_blank">Find out more &raquo;</a>', PO_LANG ),
			'http://premium.wpmudev.org/project/the-pop-over-plugin/'
		); ?>
		</div>
	</div>
	</div>
</div>

<hr />

<div class="wpmui-grid-12">
	<div class="col-12">
		<strong><?php _e( 'Closing Pop-up conditions', PO_LANG ); ?></strong>
	</div>
</div>
<div class="pro-only">
<div class="wpmui-grid-12">
	<div class="col-12 inp-row">
		<label>
			<input type="checkbox"
				readonly="readonly"
				name="po_overlay_close"
				/>
			<?php _e( 'Click on the background does not close PopUp.', PO_LANG ); ?>
		</label>
	</div>
</div>
<div class="pro-note">
	<div style="padding:15px 0 0;">
	<?php printf(
		__( 'Pro feature only. <a href="%1$s" target="_blank">Find out more &raquo;</a>', PO_LANG ),
		'http://premium.wpmudev.org/project/the-pop-over-plugin/'
	); ?>
	</div>
</div>

</div>
