<?php
declare(strict_types=1);
/**
 * @author Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at : 27/10/2019
 */

namespace JeckelLab\CommandDispatcher\Resolver;

use JeckelLab\Contract\Core\CommandDispatcher\Command\Command;
use JeckelLab\Contract\Core\CommandDispatcher\CommandHandler\CommandHandler;

/**
 * Interface CommandHandlerResolverInterface
 * @package JeckelLab\CommandDispatcher\Resolver
 */
interface CommandHandlerResolverInterface
{
    /**
     * @param Command $command
     * @return CommandHandler
     * @throws HandlerNotFoundException
     */
    public function resolve(Command $command): CommandHandler;
}
