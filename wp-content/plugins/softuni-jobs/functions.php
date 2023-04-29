<?php

/**
 * This function update job post meta for the views count
 *
 * @param [type] $job_id
 * @return void
 */
function softuni_update_jobs_views_count( $job_id){
    // за да ъпдейтнем пост метата ни трябва ID на поста-джоб/ ако няма айди, функцията няма да прави нищо
    if ( empty( $job_id)) {
        return;
    }
    
    // ако нe е сингъл вю на job
    // if (is_single( 'job' )) {
    //     return;
    // }
    
    $view_count = get_post_meta( $job_id, 'view_count', true );
    
    // var_dump($view_count);
    if ( ! empty( $view_count)) {
        $view_count ++;
    } else {
        $view_count = 1;
    }
    update_post_meta( $job_id, 'view_count', $view_count );
}