<td colspan="6">
  <?php echo __('%%id%% - %%aboutus_category_id%% - %%title%% - %%is_enable%% - %%page_view%% - %%release_date%%', array('%%id%%' => link_to($Aboutus->getId(), 'aboutus_edit', $Aboutus), '%%aboutus_category_id%%' => get_partial('aboutus/aboutus_category_id', array('type' => 'list', 'Aboutus' => $Aboutus)), '%%title%%' => get_partial('aboutus/title', array('type' => 'list', 'Aboutus' => $Aboutus)), '%%is_enable%%' => get_partial('aboutus/is_enable', array('type' => 'list', 'Aboutus' => $Aboutus)), '%%page_view%%' => $Aboutus->getPageView(), '%%release_date%%' => get_partial('aboutus/release_date', array('type' => 'list', 'Aboutus' => $Aboutus))), 'messages') ?>
</td>