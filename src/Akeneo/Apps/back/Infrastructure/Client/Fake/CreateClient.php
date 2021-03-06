<?php

declare(strict_types=1);

namespace Akeneo\Apps\Infrastructure\Client\Fake;

use Akeneo\Apps\Application\Service\CreateClientInterface;
use Akeneo\Apps\Domain\Model\ValueObject\ClientId;

/**
 * @author Romain Monceau <romain@akeneo.com>
 * @copyright 2019 Akeneo SAS (http://www.akeneo.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class CreateClient implements CreateClientInterface
{
    public function execute(string $label): ClientId
    {
        return new ClientId(806);
    }
}
