<?php 

namespace LazaBogdan\FlashNotification;

use Illuminate\Session\Store;

/**
 * Class FlashNotifier
 * @package LazaBogdan\FlashNotification
 */
class FlashNotifier
{
    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * @param $message
     */
    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * @param $message
     */
    public function error($message)
    {
        $this->message($message, 'danger');
    }

    /**
     * @param $message
     */
    public function overlay($message)
    {
        $this->message($message);
        $this->session->flash('flash_notification.overlay', true);
    }

    /**
     * @param $message
     * @param string $level
     */
    public function message($message, $level = 'info')
    {
        $this->session->flash('flash_notification.message', $message);
        $this->session->flash('flash_notification.level', $level);
    }

    /**
     * @param $collapsible_id
     */
    public function open_collapsible($collapsible_id)
    {
        $this->session->flash('flash_notification.open_collapsible', $collapsible_id);
    }

    /**
     * @param $modal_id
     */
    public function open_modal($modal_id)
    {
        $this->session->flash('flash_notification.open_modal', $modal_id);
    }

    /**
     * @param $tab_id
     */
    public function open_tab($tab_id)
    {
        $this->session->flash('flash_notification.open_tab', $tab_id);
    }
}