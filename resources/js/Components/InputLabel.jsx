export default function InputLabel({
    forInput,
    value,
    className = "",
    children,
}) {
    return (
        <label
            forInput={forInput}
            className={`text-base block mb-2 ` + className}
        >
            {value ? value : children}
        </label>
    );
}
