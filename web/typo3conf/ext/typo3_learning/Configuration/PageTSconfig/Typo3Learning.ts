mod.wizards.newContentElement.wizardItems.special {
	elements {
        typo3learning_jumbotron {
			iconIdentifier = content-image
			title = LLL:EXT:typo3_learning/Resources/Private/Language/locallang.xlf:wizard.title
			description = LLL:EXT:typo3_learning/Resources/Private/Language/locallang.xlf:wizard.description
			tt_content_defValues {
				CType = typo3learning_jumbotron
			}
		}
	}
	show := addToList(typo3learning_jumbotron)
}