<?php namespace Control4\TestsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Control4\TestsModule\Test\Table\TestTableBuilder;
use Control4\TestsModule\Test\Form\TestFormBuilder;

/**
 * Class TestsController
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\TestsModule\Http\Controller\Admin
 */
class TestsController extends AdminController
{

    public function index(TestTableBuilder $table)
    {
        return $table->render();
    }

    public function create(TestFormBuilder $form)
    {
        return $form->render();
    }

    public function edit(TestFormBuilder $form, $id)
    {
        return $form->render($id);
    }

}