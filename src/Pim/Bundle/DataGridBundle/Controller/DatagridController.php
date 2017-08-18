<?php

namespace Pim\Bundle\DataGridBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Oro\Bundle\DataGridBundle\Datagrid\Metadata;

/**
 * Datagrid controller
 *
 * @author    Filips Alpe <filips@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DatagridController
{
    /**
     * @var EngineInterface
     */
    protected $templating;

    /**
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating, Metadata $metadata)
    {
        $this->templating = $templating;
        $this->metadata   = $metadata;
    }

    /**
     * Load a datagrid
     *
     * @param Request $request
     * @param string  $alias
     *
     * @return JsonResponse
     */
    public function loadAction(Request $request, $alias)
    {

        $params = $request->get('params', []);

        return new JsonResponse([
            'metadata' => $this->metadata->getGridMetadata($alias, $params),
            'data' => $this->metadata->getGridData($alias, $params)
        ]);
    }
}
