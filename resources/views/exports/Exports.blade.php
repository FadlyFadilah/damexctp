<table>
    <thead>
        <tr>
            <th>
                {{ trans('cruds.asset.fields.id') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.serial_number') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.name') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.register') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.merk') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.ukuran') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.bahan') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.pemebelian') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.perolehan') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.status') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.harga') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.location') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.sub_lokasi') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.lantai') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.notes') }}
            </th>
            <th>
                {{ trans('cruds.asset.fields.assigned_to') }}
            </th>
            <th>
                &nbsp;
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($assets as $asset)
            <tr data-entry-id="{{ $asset->id }}">
                <td>
                    {{ $asset->id ?? '' }}
                </td>
                <td>
                    {{ $asset->serial_number ?? '' }}
                </td>
                <td>
                    {{ $asset->name ?? '' }}
                </td>
                <td>
                    {{ $asset->register ?? '' }}
                </td>
                <td>
                    {{ $asset->merk ?? '' }}
                </td>
                <td>
                    {{ $asset->ukuran ?? '' }}
                </td>
                <td>
                    {{ $asset->bahan ?? '' }}
                </td>
                <td>
                    {{ $asset->pemebelian ?? '' }}
                </td>
                <td>
                    {{ $asset->perolehan ?? '' }}
                </td>
                <td>
                    {{ $asset->status->name ?? '' }}
                </td>
                <td>
                    {{ $asset->harga ?? '' }}
                </td>
                <td>
                    {{ $asset->location->name ?? '' }}
                </td>
                <td>
                    {{ $asset->sub_lokasi ?? '' }}
                </td>
                <td>
                    {{ $asset->lantai ?? '' }}
                </td>
                <td>
                    {{ $asset->notes ?? '' }}
                </td>
                <td>
                    {{ $asset->penanggung_jawab ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
