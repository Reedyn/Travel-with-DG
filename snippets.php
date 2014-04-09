/**
 * Allows the Contributor role to upload files.
 */
function add_theme_caps() {
    $role = get_role( 'contributor' );
    $role->add_cap( 'upload_files' ); 
}
add_action( 'admin_init', 'add_theme_caps');
