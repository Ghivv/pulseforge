<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150' .
    ($attributes->get('variant') === 'primary' ? ' bg-cyan-400 text-black hover:bg-cyan-500' : ' text-cyan-400 border-cyan-400 hover:bg-gray-900')
    ]) }}>
    {{ $slot }}
</button>
