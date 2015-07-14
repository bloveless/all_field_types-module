<?php namespace Control4\AllFieldTypesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Control4\AllFieldTypesModule\Test\Table\TestTableBuilder;
use Control4\AllFieldTypesModule\Test\Form\TestFormBuilder;

/**
 * Class AllFieldTypesController
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\AllFieldTypesModule\Http\Controller\Admin
 */
class AllFieldTypesController extends AdminController
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