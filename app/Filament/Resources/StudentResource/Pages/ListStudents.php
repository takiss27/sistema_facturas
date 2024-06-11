<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;
protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('createPDF')
            ->label('Reporte de Estudiante')
            ->color('warning')
            //->requiresConfirmation()
            ->url(
                fn (): string => route('pdf.reporteEstudiantes'),
                shouldOpenInNewTab: true
            )
        ];
    }


}
